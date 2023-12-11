const puppeteer = require('puppeteer');
const cheerio = require('cheerio');
const fs = require('fs');
// const csv = require('csv-parser');
// const Result = require('./schema');
const { Parser } = require('json2csv');

// const utils = require("./utils");

async function handleScraping() {
    let browser = null
    let parser = new Parser();
    let counter = 0;
    async function init() {
        browser = await puppeteer.launch({
            headless: true, // Use the new Headless mode
            // ... other options
        });
    }

    // for Cricket page
    async function launchBrowser() {
        const page = await browser.newPage();
        
        // await page.setRequestInterception(true);

        // Listen for the 'response' event
        page.on('response', async (response) => {

            let count = 0;
            
            const url = response.url();
            // console.log("ajax url >>> ", url);

            // Check if the response URL matches the desired URL
            if (url === 'https://www.mercadopublico.cl/BuscarLicitacion/Home/Buscar') {
                // let sendData = [];

                const responseBody = await response.text();
                // console.log("response >>> ", responseBody);
                const $ = cheerio.load(responseBody);
                
                const numList = [];
                $('span.clearfix').each((i, element) => {
                    if (i%2 == 0) {
                        const num = $(element).text();
                        numList.push(num);
                    }
                });

                const titleList = [];
                $('h2.text-weight-light').each((i, element) => {
                    const title = $(element).text();
                    titleList.push(title);
                });

                const descList = [];
                $('p.text-weight-light').each((i, element) => {
                    const desc = $(element).text();
                    descList.push(desc);
                });

                const budgetList = [];
                $('div.monto-dis').each((i, element) => {
                    let budget = $(element).text();
                    try {
                        budget = budget.replace("Monto disponible", "");
                    } catch (error) {}
                    try {
                        budget = budget.replace("Monto estimado", "");
                    } catch (error) {}
                    try {
                        budget = budget.replace("Monto", "");
                    } catch (error) {}
                    budgetList.push(budget);
                });
                
                const postDateList = [];
                $('div.lic-block-body>div:nth-child(3)>div:nth-child(2)>span').each((i, element) => {
                    const postDate = $(element).text();
                    postDateList.push(postDate);
                });
                
                const deadlineList = [];
                $('div.lic-block-body>div:nth-child(3)>div:nth-child(3)>span:nth-child(2)').each((i, element) => {
                    const deadline = $(element).text();
                    deadlineList.push(deadline);
                });
                
                for (let j = 0; j < titleList.length; j++) {
                    const num = numList[j].trim();
                    // console.log("num >>>", num)
                    const title = titleList[j].trim();
                    // console.log("title >>>", title)
                    const desc = descList[j].trim();
                    // console.log("desc >>> ", desc);
                    const budget = budgetList[j].trim();
                    // console.log("budget >>> ", budget);
                    const postDate = postDateList[j].trim();
                    // console.log("postDate >>> ", postDate);
                    const deadline = deadlineList[j].trim();
                    // console.log("deadline >>> ", deadline);
                    const resultData = {num, title, desc, budget, postDate, deadline};
                    // sendData.push(resultData);
                                      
                    // const parser = new Parser();
                    const csv = parser.parse(resultData);
                
                    const csvDataWithoutHeader = csv.split('\n')[1] + '\n';
                    
                    fs.appendFileSync('ScrapedJobs.csv', csvDataWithoutHeader, 'utf8', (err) => {
                        if (err) {
                            // console.error('Error appending to CSV file:', err);
                        } else {
                            // console.log('CSV data appended successfully.');
                        }
                    });
                    
                    // console.log("send data count >>> ", sendData.length);
                    // const toServerData = {data: sendData};
                    await sendToServer(resultData);
                    // console.log("----------------------------------------------------");
                }
            }
        });
        
        // Disable request interception
        // await page.setRequestInterception(false);
        
        // Navigate to a page that triggers AJAX requests
        await page.goto('https://www.mercadopublico.cl/Home/BusquedaLicitacion', {
            waitUntil: 'load',
            timeout: 0,
          });
        // console.log("page loaded!");
        
        // // Wait for the page to load.
        
        // Delay function
        function delay(ms) {
            return new Promise((resolve) => setTimeout(resolve, ms));
        }

        // // select attribute
        // await page.evaluate(() => document.querySelector('//*[@id="ordenarpor"]/option[1]').setAttribute('selected', ''));
        // await page.evaluate(() => document.querySelector('//*[@id="ordenarpor"]/option[5]').setAttribute('selected', 'selected'));
            
        // await page.waitForNavigation();
        await page.evaluate(() => {
            window.scrollTo(0, document.documentElement.scrollHeight);
        });
        
        // delay
        await delay(3000);

        var iframeElement = await page.$('#form-iframe');
  
   
        try {
            for(var index=2; index<680; index++)
            {
                var frame = await iframeElement.contentFrame();
                var flag = false;
    
                flag =  await frame.evaluate((index) => {
                    
                    $.Busqueda.buscar(index);
                    // const nextBtn = $('.next-pager')
    
                    // if (nextBtn != null) {
                    //     nextBtn.trigger('click');
                    //     return false;
                    // } else {
                    //     return true;
                    // }        
                }, index);
                await delay(100);
    
                if(flag)
                    break;
            }
        } catch (error) {
            // console.log("no next page!");
        }

        // await page.waitForNavigation();

        // await browser.close();
    }
    
    async function sendToServer(data) {

        counter++;
        // console.log(counter)
        // console.log(data);
        console.log(JSON.stringify(data));
        fetch(`http://localhost:8000/api/scrapedData`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(res => {
            return res.json()
        })
        .then((res) => {
        console.log("success");
        // Handle the response data
        })
        .catch((error) => {
        // console.log("fetch error!!!");
        // Handle any errors that occurred during the request
        });
    }

    // lunch main code for Cricket
    await init();
    await launchBrowser();
    
}

// setInterval(() => {
    // lunch full code
    handleScraping().then(res => {
        // console.log('handle scraping have done!!')
    })
// }, 36000000);
