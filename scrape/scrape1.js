const puppeteer = require('puppeteer');
const cheerio = require('cheerio');
// const utils = require("./utils");

async function handleScraping() {
    let browser = null

    async function init() {
        browser = await puppeteer.launch({
            headless: false, // Use the new Headless mode
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
                const responseBody = await response.text();
                // console.log("response >>> ", responseBody);
                const $ = cheerio.load(responseBody);
                // console.log("$ >>> ", $.html);

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
                
                for (let j = 0; j < titleList.length; j++) {
                    const title = titleList[j].trim();
                    // console.log("title >>>", title)
                    const desc = descList[j].trim();
                    // console.log("desc >>> ", desc);
                    console.log("----------------------------------------------------");
                }
                

            }
        });
        
        // Disable request interception
        // await page.setRequestInterception(false);
        
        // Navigate to a page that triggers AJAX requests
        await page.goto('https://www.mercadopublico.cl/Home/BusquedaLicitacion', {
             timeout: 300000
        });
        console.log("page loaded!");
        
        // // Wait for the page to load.
        
        // Delay function
        function delay(ms) {
            return new Promise((resolve) => setTimeout(resolve, ms));
        }

        // await delay(3000);
        
        // While there is a next page link, click on it and load the next page.
        // while (true) {
            
            // await page.waitForNavigation();
            await page.evaluate(() => {
                window.scrollTo(0, document.documentElement.scrollHeight);
            });
        
            
            // delay
            // await delay(3000);

            // const tem = await page.$('.next-pager')
            // console.log("text >>> ", tem);
            const iframeElement = await page.$('#form-iframe');
            const frame = await iframeElement.contentFrame();

            // const text = await frame.$eval('.some-selector', element => element.textContent);
            await frame.evaluate(async() => {
                const nextBtn = $('.next-pager')
                 console.log(nextBtn)
                // $.Busqueda.buscar(2);
                // console.log('fucking...', nextBtn)
                nextBtn.trigger('click')
                //  console.log('clicked...')

            });




             await page.waitForNavigation();

            
            // await page.waitForNavigation();
            // await page.evaluate(() => {
            //     window.scrollTo(0, document.documentElement.scrollHeight);
            // });
        
            
            // // delay
            // // await delay(3000);

            // tem = await page.$('.next-pager')
            // // console.log("text >>> ", tem);
            // iframeElement = await page.$('#form-iframe');
            // frame = await iframeElement.contentFrame();

            // // const text = await frame.$eval('.some-selector', element => element.textContent);
            // await frame.evaluate(() => {
            //     const nextBtn = $('.next-pager')
            //     console.log("1111111111111111111111111",nextBtn)
            //     // $.Busqueda.buscar(2);
            //     // console.log('fucking...', nextBtn)
            //     nextBtn.trigger('click')
            //     // console.log('clicked...')

            // });

            // await page.waitForNavigation();

        // }


        // await browser.close();
    }

    // lunch main code for Cricket
    await init()
    await launchBrowser()
    
}

// lunch full code
handleScraping().then(res => {
    // console.log('handle scraping have done!!')
})
