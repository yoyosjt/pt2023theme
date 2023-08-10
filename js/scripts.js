//set the lightbox HTML
const elPreviewBox = document.createElement('div')
elPreviewBox.className = 'preview-box'
document.body.appendChild(elPreviewBox)

const elDetails = document.createElement('div')
elDetails.className = 'details'
elPreviewBox.appendChild(elDetails)

const elTitle = document.createElement('span')
elTitle.className = 'title'
elDetails.appendChild(elTitle)

const elCurrentImgNumber = document.createElement('p')
elCurrentImgNumber.className = 'current-img-number'
elTitle.appendChild(elCurrentImgNumber)

const elTotalImgNumber = document.createElement('p')
elTotalImgNumber.className = 'total-img-number'
elTitle.appendChild(elTotalImgNumber)

const elCloseBtn = document.createElement('span')
elCloseBtn.className = 'icon'
elCloseBtn.textContent = 'X'
elDetails.appendChild(elCloseBtn)

const elImgBox = document.createElement('div')
elImgBox.className = 'image-box'
elPreviewBox.appendChild(elImgBox)

const elPrev = document.createElement('div')
elPrev.className = 'slide prev'
elPrev.textContent = ' '
elImgBox.appendChild(elPrev)

const elNext = document.createElement('div')
elNext.className = 'slide next'
elImgBox.appendChild(elNext)

const elImg = document.createElement('img')
elImgBox.appendChild(elImg)

const elCaption = document.createElement('p')
elCaption.className = 'caption'
elImgBox.appendChild(elCaption)

const elShadow = document.createElement('div')
elShadow.className = 'shadow'
document.body.appendChild(elShadow)

//getting all required elements
const gallery  = document.querySelectorAll(".entry-content img")

function doLightbox() {
    for (let i = 0; i < gallery.length; i++) {
        elTotalImgNumber.textContent = gallery.length; //passing total img length to totalImg variable
        
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable
        
        gallery[i].onclick = () =>{
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)

            function preview(){
                elCurrentImgNumber.textContent = (newIndex + 1) + '/'; //passing current img index to currentImg varible with adding +1
                let imageURL = gallery[newIndex].srcset //getting user-clicked img url
                elImg.srcset = imageURL;
                
                let imageHeight = gallery[newIndex].naturalHeight
                //console.log(imageHeight)
                if (imageHeight >= 800) {
                    elPreviewBox.style.maxWidth = '600px'
                    //elPreviewBox.style.maxHeight = '70vh'
                } else {
                    elPreviewBox.style.maxWidth = '1000px'
                }
                
                elCaption.textContent = gallery[newIndex].alt
                if (! Object.is(gallery[newIndex].nextSibling, null)) {
                    elCaption.textContent = gallery[newIndex].nextSibling.innerText
                } 
                
            }
            preview(); //calling above function
    
            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(newIndex == 0){ //if index value is equal to 0 then hide prevBtn
                prevBtn.style.display = "none"; 
            }
            if(newIndex >= gallery.length - 1){ //if index value is greater and equal to gallery length by -1 then hide nextBtn
                nextBtn.style.display = "none"; 
            }
            prevBtn.onclick = ()=>{ 
                newIndex--; //decrement index
                if(newIndex == 0){
                    preview(); 
                    prevBtn.style.display = "none"; 
                }else{
                    preview();
                    nextBtn.style.display = "block";
                } 
            }
            nextBtn.onclick = ()=>{ 
                newIndex++; //increment index
                if(newIndex >= gallery.length - 1){
                    preview(); 
                    nextBtn.style.display = "none";
                }else{
                    preview(); 
                    prevBtn.style.display = "block";
                }
            }
            //document.querySelector("body").style.overflow = "hidden";
            elPreviewBox.classList.add("show"); 
            elShadow.style.display = "block"; 

            function closeGallery () {
                newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                prevBtn.style.display = "block"; 
                nextBtn.style.display = "block";
                elPreviewBox.classList.remove("show");
                elShadow.style.display = "none";
                document.querySelector("body").style.transition = "all .2s ease-in-out 2s";
                //document.querySelector("body").style.overflow = "scroll";
            }
            elCloseBtn.onclick = ()=>{
                closeGallery();
            }

            elShadow.addEventListener('click', e => {
                closeGallery();
            })
        }
        
    }
}


window.onload = ()=>{

    for (let i = 0; i < gallery.length; i++) {
        let parentElement = gallery[i].parentElement.localName
        if (parentElement === 'a') {
            let childNode = gallery[i]
            gallery[i].parentElement.replaceWith(childNode)
        }
    }

    doLightbox();   
}
