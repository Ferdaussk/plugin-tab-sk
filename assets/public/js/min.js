"use strict"
// tab maker root
function TabMaker(tabButtons, tabItems, btnActive, tabActive, progressLine,dir, res) {
    for (let i = 0; i < tabButtons.length; i++) {
        tabButtons[i].addEventListener('click', function () {
            for (let j = 0; j < tabButtons.length; j++) {

                // tab button class active/remove
                tabButtons[j].classList.remove(btnActive);
                this.classList.add(btnActive);

                // tab contents class active/remove
                tabItems[j].classList.remove(tabActive);
                tabItems[i].classList.add(tabActive);
            }

            if (progressLine) {

                let singlePgWidth = 100 / tabItems.length;

                if(dir==='width'){
                    progressLine.style.width = singlePgWidth * (i + 1) + '%';
                }
                else if(dir==='height'){
                    progressLine.style.height = singlePgWidth * (i + 1) + '%';
                }

                if(res &&  window.innerWidth < 768){
                    progressLine.style.height = 100 + '%';
                    progressLine.style.width = singlePgWidth * (i + 1) + '%';
                }
                
            }
        })





    }
}

// // tab one=== === === === === === === ===
const tabOneBtns = document.querySelectorAll('.bwdtz-tab-one .bwdtz-nav .bwdtz-nav-link');
const tabOneContents = document.querySelectorAll('.bwdtz-tab-one .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabOneBtns, tabOneContents, 'active-link', 'active-tab-pane');

// // tab two === === === === === === === ===
const tabTwoBtns = document.querySelectorAll('.bwdtz-tab-two .bwdtz-nav li');
const tabTwoContents = document.querySelectorAll('.bwdtz-tab-two .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabTwoBtns, tabTwoContents, 'active', 'active');

// // tab three === === === === === === === ===
const tabThreeBtns = document.querySelectorAll('.bwdtz-tab-three .bwdtz-nav-tabs li');
const tabThreeContents = document.querySelectorAll('.bwdtz-tab-three .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabThreeBtns, tabThreeContents, 'active', 'active');

// // tab four === === === === === === === ===
const tabFourBtns = document.querySelectorAll('.bwdtz-tab-four .bwdtz-nav-tabs li');
const tabFourContents = document.querySelectorAll('.bwdtz-tab-four .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabFourBtns, tabFourContents, 'active', 'active');

// tab five === === === === === === === ===
const tabFiveBtns = document.querySelectorAll('.bwdtz-tab-five .bwdtz-nav-tabs li');
const tabFiveContents = document.querySelectorAll('.bwdtz-tab-five .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabFiveBtns, tabFiveContents, 'active', 'active');

// tab six === === === === === === === ===
const tabSixBtns = document.querySelectorAll('.bwdtz-tab-six .bwdtz-nav-tabs li');
const tabSixContents = document.querySelectorAll('.bwdtz-tab-six .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabSixBtns, tabSixContents, 'active', 'active');


// tab seven === === === === === === === ===
const tabSevenBtns = document.querySelectorAll('.bwdtz-tab-seven .bwdtz-nav-tabs li');
const tabSevenContents = document.querySelectorAll('.bwdtz-tab-seven .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabSevenBtns, tabSevenContents, 'active', 'active');

// tab eight === === === === === === === ===
const tabEightBtns = document.querySelectorAll('.bwdtz-tab-eight .bwdtz-nav-tabs li');
const tabEightContents = document.querySelectorAll('.bwdtz-tab-eight .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabEightBtns, tabEightContents, 'active', 'active');


// tab nine === === === === === === === ===
const tabNineBtns = document.querySelectorAll('.bwdtz-tab-nine .bwdtz-nav-tabs li');
const tabNineContents = document.querySelectorAll('.bwdtz-tab-nine .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabNineBtns, tabNineContents, 'active', 'active');

// tab ten === === === === === === === ===
const tabTenBtns = document.querySelectorAll('.bwdtz-tab-ten .bwdtz-nav-tabs li');
const tabTenContents = document.querySelectorAll('.bwdtz-tab-ten .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tabTenBtns, tabTenContents, 'active', 'active');

// tab Eleven === === === === === === === ===
const tab11Btns = document.querySelectorAll('.bwdtz-tab-eleven .bwdtz-nav-tabs li');
const tab11Contents = document.querySelectorAll('.bwdtz-tab-eleven .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab11Btns, tab11Contents, 'active', 'active');

// tab 12 === === === === === === === ===
const tab12Btns = document.querySelectorAll('.bwdtz-tab-twelve .bwdtz-nav-tabs li');
const tab12Contents = document.querySelectorAll('.bwdtz-tab-twelve .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab12Btns, tab12Contents, 'active', 'active');

// tab 13 === === === === === === === ===
const tab13Btns = document.querySelectorAll('.bwdtz-tab-thirteen .bwdtz-nav-tabs li');
const tab13Contents = document.querySelectorAll('.bwdtz-tab-thirteen .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab13Btns, tab13Contents, 'active', 'active');

// tab 14 === === === === === === === ===
const tab14ContentWrapper = document.querySelector('.bwdtz-tab-fourteen .bwdtz-tab-content');


const tab14Contents = document.querySelectorAll('.bwdtz-tab-fourteen .bwdtz-tab-content .bwdtz-tab-pane');
const tab14Btns = document.querySelectorAll('.bwdtz-tab-fourteen .bwdtz-nav-tabs li');
const tab14ContentsWrapper = document.querySelector('.bwdtz-tab-fourteen .bwdtz-tab-content ');

TabMaker(tab14Btns, tab14Contents, 'active', 'active');



// minHeightAdd
function minHeightAdd(tabWrapper,tabBtns,tabContents) {
    tabWrapper.style.minHeight = tabContents[0].clientHeight + 'px';
    for (let i = 0; i < tabBtns.length; i++) {
        tabBtns[i].addEventListener('click', function () {
            let itemHeight = tabContents[i].clientHeight;
            tabWrapper.style.minHeight = itemHeight + 'px';
        })

    }

}
minHeightAdd(tab14ContentsWrapper,tab14Btns,tab14Contents)








// tab 15 === === === === === === === ===
const tab15Btns = document.querySelectorAll('.bwdtz-tab-fifteen .bwdtz-nav-tabs li');
const tab15Contents = document.querySelectorAll('.bwdtz-tab-fifteen .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab15Btns, tab15Contents, 'active', 'active');

// tab 16 === === === === === === === ===
const tab16Btns = document.querySelectorAll('.bwdtz-tab-sixteen .bwdtz-nav-tabs li');
const tab16Contents = document.querySelectorAll('.bwdtz-tab-sixteen .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab16Btns, tab16Contents, 'active', 'active');

// tab 17 === === === === === === === ===
const tab17Btns = document.querySelectorAll('.bwdtz-tab-seventeen .bwdtz-nav-tabs li');
const tab17Contents = document.querySelectorAll('.bwdtz-tab-seventeen .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab17Btns, tab17Contents, 'active', 'active');

// tab 18 === === === === === === === ===
const tab18Btns = document.querySelectorAll('.bwdtz-tab-eighteen .bwdtz-nav-tabs li');
const tab18Contents = document.querySelectorAll('.bwdtz-tab-eighteen .bwdtz-tab-content .bwdtz-tab-pane');
const progressLine18 = document.querySelector('.bwdtz-tab-eighteen .bwdtz-progress-bar .bwdtz-progress-bar-inner')
TabMaker(tab18Btns, tab18Contents, 'active', 'active', progressLine18,'width');

// tab 19 === === === === === === === ===
const tab19Btns = document.querySelectorAll('.bwdtz-tab-nineteen .bwdtz-nav-tabs li');
const tab19Contents = document.querySelectorAll('.bwdtz-tab-nineteen .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab19Btns, tab19Contents, 'active', 'active');


// wheelNav ===Tab 20====
const wheelNav = document.querySelector('.bwdtz-tab-twenty .bwdtz-nav-tabs');
const wheelNavItems = document.querySelectorAll('.bwdtz-tab-twenty .bwdtz-nav-tabs li button ');


function wheelNavMaker() {
    for (let item of wheelNavItems) {
        item.addEventListener('click', function () {
            if (item.getAttribute('class') === 'btn1') {

                wheelNav.style.transform = 'rotate(90deg)';
                let icon = this.querySelector('svg');

                for (let item of wheelNavItems) {
                    let singleItem = item.querySelector('svg')
                    singleItem.style.transform = 'rotate(0)';
                }
                icon.style.transform = 'rotate(270deg)';

            }

            else if (item.getAttribute('class') === 'btn2') {
                wheelNav.style.transform = 'rotate(360deg)';
                let icon = this.querySelector('svg');
                for (let item of wheelNavItems) {
                    let singleItem = item.querySelector('svg')
                    singleItem.style.transform = 'rotate(0)';
                }
                icon.style.transform = 'rotate(0deg)';

            }

            else if (item.getAttribute('class') === 'btn3') {
                wheelNav.style.transform = 'rotate(270deg)';
                let icon = this.querySelector('svg');
                for (let item of wheelNavItems) {
                    let singleItem = item.querySelector('svg')
                    singleItem.style.transform = 'rotate(0)';
                }
                icon.style.transform = 'rotate(90deg)';


            }

            else if (item.getAttribute('class') === 'btn4') {
                wheelNav.style.transform = 'rotate(180deg)';
                let icon = this.querySelector('svg');
                for (let item of wheelNavItems) {
                    let singleItem = item.querySelector('svg')
                    singleItem.style.transform = 'rotate(0)';
                }
                icon.style.transform = 'rotate(90deg)';

            }

        })
    }
}
wheelNavMaker()


// tab 20 === === === === === === === ===
const tab20Btns = document.querySelectorAll('.bwdtz-tab-twenty .bwdtz-nav-tabs li');
const tab20Contents = document.querySelectorAll('.bwdtz-tab-twenty .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab20Btns, tab20Contents, 'active', 'active');




const tab20ContentsWrapper = document.querySelector('.bwdtz-tab-twenty .bwdtz-tab-content ');
minHeightAdd(tab20ContentsWrapper,tab20Btns,tab20Contents)




// tab 21 === === === === === === === ===
const tab21Btns = document.querySelectorAll('.bwdtz-tab-twenty-one .bwdtz-nav-tabs li');
const tab21Contents = document.querySelectorAll('.bwdtz-tab-twenty-one .bwdtz-tab-content .bwdtz-tab-pane');
const progressLine21 = document.querySelector('.bwdtz-tab-twenty-one .bwdtz-progress-bar .bwdtz-progress-bar-inner')

TabMaker(tab21Btns, tab21Contents, 'active', 'active', progressLine21,'height','res');


document.addEventListener('resize',()=>{
    TabMaker(tab21Btns, tab21Contents, 'active', 'active', progressLine21,'height','res');
})



// tab 22 === === === === === === === ===
const tab22Btns = document.querySelectorAll('.bwdtz-tab-twenty-two .bwdtz-nav-tabs li');
const tab22Contents = document.querySelectorAll('.bwdtz-tab-twenty-two .bwdtz-tab-content .bwdtz-tab-pane');
const progressLine22 = document.querySelector('.bwdtz-tab-twenty-two .bwdtz-nav-tabs .bwdtz-progress-bar .bwdtz-progress-bar-inner')

TabMaker(tab22Btns, tab22Contents, 'active', 'active',progressLine22,'width');



// tab 23 === === === === === === === ===
const tab23Btns = document.querySelectorAll('.bwdtz-tab-twenty-three .bwdtz-nav-tabs li');
const tab23Contents = document.querySelectorAll('.bwdtz-tab-twenty-three .bwdtz-tab-content .bwdtz-tab-pane');

TabMaker(tab23Btns, tab23Contents, 'active', 'active');


// tab 24 === === === === === === === ===
const tab24Btns = document.querySelectorAll('.bwdtz-tab-twenty-four .bwdtz-nav-tabs li');
const tab24Contents = document.querySelectorAll('.bwdtz-tab-twenty-four .bwdtz-tab-content .bwdtz-tab-pane');

TabMaker(tab24Btns, tab24Contents, 'active', 'active');

// tab 25 === === === === === === === ===
const tab25Btns = document.querySelectorAll('.bwdtz-tab-twenty-five .bwdtz-nav-tabs li');
const tab25Contents = document.querySelectorAll('.bwdtz-tab-twenty-five .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab25Btns, tab25Contents, 'active', 'active');




// tab 26 === === === === === === === ===
const tab26Btns = document.querySelectorAll('.bwdtz-tab-twenty-six .bwdtz-nav-tabs li');
const tab26Contents = document.querySelectorAll('.bwdtz-tab-twenty-six .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab26Btns, tab26Contents, 'active', 'active');


// tab 27 === === === === === === === ===
const tab27Btns = document.querySelectorAll('.bwdtz-tab-twenty-seven .bwdtz-nav-tabs li');
const tab27Contents = document.querySelectorAll('.bwdtz-tab-twenty-seven .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab27Btns, tab27Contents, 'active', 'active');


// tab 28 === === === === === === === ===
const tab28Btns = document.querySelectorAll('.bwdtz-tab-twenty-eight .bwdtz-nav-tabs li');
const tab28Contents = document.querySelectorAll('.bwdtz-tab-twenty-eight .bwdtz-tab-content .bwdtz-tab-pane');

TabMaker(tab28Btns, tab28Contents, 'active', 'active');


// tab 29 === === === === === === === ===
const tab29Btns = document.querySelectorAll('.bwdtz-tab-twenty-nine .bwdtz-nav-tabs li');
const tab29Contents = document.querySelectorAll('.bwdtz-tab-twenty-nine .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab29Btns, tab29Contents, 'active', 'active');


// tab 30 === === === === === === === ===
const tab30Btns = document.querySelectorAll('.bwdtz-tab-thirty .bwdtz-nav-tabs li');
const tab30Contents = document.querySelectorAll('.bwdtz-tab-thirty .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab30Btns, tab30Contents, 'active', 'active');


// tab 31 === === === === === === === ===
const tab31Btns = document.querySelectorAll('.bwdtz-tab-thirty-one .bwdtz-nav-tabs li');
const tab31Contents = document.querySelectorAll('.bwdtz-tab-thirty-one .bwdtz-tab-content .bwdtz-tab-pane');
TabMaker(tab31Btns, tab31Contents, 'active', 'active');













