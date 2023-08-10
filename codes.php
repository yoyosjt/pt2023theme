
https://taylor.callsen.me/responsive-images-and-how-to-serve-them-from-wordpress/

<?php //the_post_thumbnail('large'); ?>
				<!--<?php 
					//$alt = get_post_meta($post->ID, '_wp_attachment_image_alt', true);
				?>
				<?php //$upload_dir = wp_upload_dir(); ?>
				<img
					srcset="
						<?php //echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>  400w,
						<?php //echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>     700w,
						<?php //echo get_the_post_thumbnail_url($post->ID, 'large'); ?>      900w,
						<?php //echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>     1200w
					"
					class=""
					width=""
					height=""
					src="<?php //the_post_thumbnail_url($post->ID, 'large'); ?>"
					alt="<?php //echo $alt; ?>"
				/>
			<?php endif; ?>

			
			
					<?php //echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>   
					<?php //echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>     
					<?php //echo get_the_post_thumbnail_url($post->ID, 'large'); ?>       
					

			<?php //echo $upload_dir['url'] . '/pt-1200.jpg'; ?>







        echo get_the_post_thumbnail(
							null,
							'',
							array( 
								'srcset' => 
                                    wp_get_attachment_image_url( get_post_thumbnail_id(), 'thumbnail' ) . ' 400w, ' .
									wp_get_attachment_image_url( get_post_thumbnail_id(), 'medium' ) . ' 700w, ' .
									wp_get_attachment_image_url( get_post_thumbnail_id(), 'large') . ' 900w'
							)
						);



/* Add custom classes to list item "li" */
/*function _namespace_menu_item_class( $classes, $item ) {       
    $classes[] = "mob-nav__item"; // you can add multiple classes here
    return $classes;
} 
add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );*/

/* Add custom class to link in menu */
/*function pt_modify_menu($ulclass, $args) {
    $to_return = '';
    if ( $args->theme_location == 'pt2023-desktop-menu') {
        $to_return .= preg_replace('/<a /', '<a class="hvr-shutter-out-horizontal"', $ulclass);
    }
    return $to_return;
}
add_filter('wp_nav_menu', 'pt_modify_menu');*/


/* Add custom menu item in wp nav menu */
/*add_filter( 'wp_nav_menu_items', 'pt2023_mobile_item', 10, 2 );
function pt2023_mobile_item ( $items, $args ) {
    if ( $args->theme_location == 'pt2023-mobile-menu') {
        $items .= '<li><a title="">Custom Text</a></li>';
    }
    return $items;
}*/

<img decoding="async" loading="lazy" data-id="25564" src="http://localhost/pt2023/wp-content/uploads/hd-wallpaper-gbd8ddf8c7_1920-400x260.jpg" 
alt="" 
class="wp-image-25564" 
srcset="
http://localhost/pt2023/wp-content/uploads/hd-wallpaper-gbd8ddf8c7_1920-400x260.jpg 400w, 
http://localhost/pt2023/wp-content/uploads/hd-wallpaper-gbd8ddf8c7_1920-690x449.jpg 690w, 
http://localhost/pt2023/wp-content/uploads/hd-wallpaper-gbd8ddf8c7_1920-900x585.jpg 900w, 
http://localhost/pt2023/wp-content/uploads/hd-wallpaper-gbd8ddf8c7_1920-1536x998.jpg 1536w, 
http://localhost/pt2023/wp-content/uploads/hd-wallpaper-gbd8ddf8c7_1920.jpg 1920w" 

sizes="(max-width: 400px) 100vw, 400px" width="400" height="260">



<img srcset="http://localhost/pt2023/wp-content/uploads/pt-orig-1200-400x267.jpg 400w,
http://localhost/pt2023/wp-content/uploads/pt-orig-1200-690x461.jpg 690w,
http://localhost/pt2023/wp-content/uploads/pt-orig-1200-900x601.jpg 900w" alt="alt text her">


<img src="http://localhost/pt2023/wp-content/uploads/Wells-Photography-Club-Logo-900x900.jpg 900w, 
http://localhost/pt2023/wp-content/uploads/Wells-Photography-Club-Logo-690x690.jpg 690w, 
http://localhost/pt2023/wp-content/uploads/Wells-Photography-Club-Logo-400x400.jpg 400w, 
http://localhost/pt2023/wp-content/uploads/Wells-Photography-Club-Logo.jpg 960w">


//https://www.youtube.com/watch?v=uKVVSwXdLr0

window.onload = function() {
    const lightbox = document.createElement('div')
    lightbox.id = 'lightbox'
    document.body.appendChild(lightbox)

    const images = document.querySelectorAll( ".entry-content img" )

    //console.log(images.length)

    images.forEach(image => {
        image.addEventListener('click', e => {
            lightbox.classList.add('active')

            //console.log(image.findIndex)
            console.log(image)
            console.log(e.target.className) // e is the image
            

            const lb_contents_wrap = document.createElement('div')
            lb_contents_wrap.className = 'lb_contents_wrap'
            

            const lb_figure = document.createElement('figure')
            const lb_close = document.createElement('a')
            lb_close.setAttribute('href',"#");
            lb_close.innerText = "X";

            const lb_img = document.createElement('img')
            lb_img.srcset = image.srcset
            
            lb_alt_text = image.alt
            const lb_figcaption = document.createElement( 'figcaption' )
            lb_figcaption.innerHTML = lb_alt_text
                
            lb_figure.appendChild(lb_close);
            lb_figure.appendChild(lb_img);
            lb_figure.appendChild(lb_figcaption);

            lb_contents_wrap.appendChild(lb_figure);
            
            while (lightbox.hasChildNodes()) {
                lightbox.removeChild(lightbox.lastChild)
            }

            //lightbox.appendChild(lb_figure)
            lightbox.appendChild(lb_contents_wrap)
        })
    })

    lightbox.addEventListener('click', e => {
        if (e.target !== e.currentTarget) return
        lightbox.classList.remove('active')
    })
}










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
elCloseBtn.className = 'icon fas fa-times'
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

const previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImgNumber = previewBox.querySelector(".current-img-number"),
totalImgNumber = previewBox.querySelector(".total-img-number"),
shadow = document.querySelector(".shadow");

window.onload = ()=>{

    for (let i = 0; i < gallery.length; i++) {
        totalImgNumber.textContent = gallery.length; //passing total img length to totalImg variable
        
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable
        
        gallery[i].onclick = () =>{
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)

            function preview(){
                currentImgNumber.textContent = (newIndex + 1) + '/'; //passing current img index to currentImg varible with adding +1
                let imageURL = gallery[newIndex].srcset //getting user-clicked img url
                previewImg.srcset = imageURL;
                
                let imageHeight = gallery[newIndex].naturalHeight
                console.log(imageHeight)
                if (imageHeight >= 800) {
                    previewBox.style.maxWidth = '600px'
                    //previewBox.style.maxHeight = '70vh'
                } else {
                    previewBox.style.maxWidth = '1000px'
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
            previewBox.classList.add("show"); 
            shadow.style.display = "block"; 

            function closeGallery () {
                newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                prevBtn.style.display = "block"; 
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").style.transition = "all .2s ease-in-out 2s";
                //document.querySelector("body").style.overflow = "scroll";
                
            }
            closeIcon.onclick = ()=>{
                closeGallery();
            }

            shadow.addEventListener('click', e => {
                closeGallery();
            })
        }
        
    }
    
}









<section class="f-left">
                <section class="contact-us">
                    <h3 class="footer-titles">Contact Us</h3>
                    <ul class="">
                        <li class="menu-item><span class="icon">icon </span>+66 0841 1451 005</li>
                        <li class="menu-item><span class="icon">icon </span>pinoythaiyo@gmail.com</li>
                    </ul>
                </section>
            </section>
            <section class="f-right">
                <nav class="footer-nav">
                    <h3 class="footer-titles">Quick Links</h3>
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'pt2023-footer-menu',
                                'menu_class' => 'footer-menu',
                                //'menu_id' => 'footer-menu',
                                //'add_ahref_class' => 'red-on-hover',
                                //'link_before' => '<span>',
                                //'link_after'=>'</span>',
                                'depth' => 0,
                            ) 
                        ); 
                    ?>
                </nav>
            </section>



function pt2023_get_posts($title, $cat, $numofposts, $order, $excerpt) {

    global $post;
    
    $args = array(
        'numberposts'   => $numofposts,
        'category'      => $cat,
        'orderby'       => $order,
        'post_type'     => 'post',
        'post_status'   => 'publish',
    );
  
    $my_get_posts = get_posts( $args ); 
    $to_display ='';
    if($my_get_posts) {
      if ($title=='') { //get the category name
        $to_display .= '<h3 class="category-title">' . get_cat_name($cat) . '</h3>';
      } else {
        $to_display .= '<h3 class="category-title">' . $title . '</h3>';
      }
      $to_display .='<ul class="post-looper">';
      foreach ( $my_get_posts as $post ) : setup_postdata( $post );
        $to_display .= '<li>';
        $to_display .= '<a href="' . get_the_permalink() . '" class="" aria-hidden="true">';

        $to_display .= '<div class="thumbnail-wrapper">';
        $to_display .= get_the_post_thumbnail($post->ID, 'thumbnail', array( 'class' => 'hover-fade' )); 
        $to_display .= '</div>';
  
        $to_display .= '<div class="title-wrapper">';
        $to_display .= '<h4>' . get_the_title() . '</h4>';
        if ($excerpt==1){ $to_display .= '<p>' . $post->post_excerpt . '</p>'; }
        $to_display .= '</div>';

        $to_display .= '</a></li>';
      endforeach;
      $to_display .= '</ul>';
    } 
    
    wp_reset_postdata();
    return $to_display; 
  }