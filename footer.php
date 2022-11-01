
<?php wp_footer(); ?>

<footer class="general-padding beige">
    <div class="row m-0">
        <div class="col-6 col">

            <p2><?php $args = array( 'theme_location' => 'footer' ); ?>
			<?php wp_nav_menu(  $args ); ?>	</p2>

                <a>
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect y="0.342041" width="23" height="23" rx="2.02786" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_925_4713" transform="translate(-0.14618 -0.14618) scale(0.0134621)"/>
                        </pattern>
                        <image id="image0_925_4713" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAABmJLR0QA/wD/AP+gvaeTAAADRUlEQVR4nO3dO2sVQRjG8X805iheOkkhiASskoiVYLBUBKM2XioLQYV8A0Hs7OM1WvoBRIyg4L2wsLBR0FIEBVGMjSYiamIsJoEj5uTMzF7e3dnnB1PtzuzsPDmbnT27e0BERERERERERMTfMHAReA3MAPOJl5mFfb0ADOUwftFawFVgDvtBsSpzwATQl3Esg7WAJxk6nlp5TMkhXCtgJ+permQa0QDDNPuw06nMAoOhg7kitAJwMrJe6lYCJ0IrxQzk7og6TbEntEJPxEamgXUR9ZpgGtgQUiEmgPmIOk0SNKY6lhtTAMYUgDEFYKzXYJvPgFvAG9yEbgA4CowY9KWWYmeKP3AD3clx3GzSekabtRQutmM+s8SzGdqvSglS1jzgA7AZ+NNlvbXAFLAmYhtVUcl5wHO6Dz7Ad9yXHY1RVgA+g79orrBeVFBZAWzzXK9FxCXdOisrgK3APo/1TgHrC+5L7cWeHXwGti/T7gHcqar1WUySZ0GLfgLXgdvAO9whZwg3P9gf2Z+qCdoHXY7OXyVPQ6UDBWBMARhTAMbKCuAT7p+TT+nmiGc77TdK/QYmgTFgB9APrMZdcxoAjgH3MuxfqWLOjT/m2P5hz3YuL6x/E3ch0Mco7o+ltHlA6oegc8Ah4L3n+ndx9z19KaxHOajLJyD4Jqk2ox79yOUTEKMuAWQ16dEXHYIKdL6MjSiAzp4Cb4veSBMC6MUd00/jrrj67vM88KCoTi2yuC2lTJuAO/x7Gfw+cBD45VH/RRGdapfyJ6AHuMH/30HsBc54tvEy1x4tIeUARoCdHZaN4TfrnsqvO0tLOYBdyyzrB7Z4tPE1p750lHIA/V2Wb/Ro41seHVlOygGsyrgc3K2ShUo5gFpQAMYUgDEFYEwBGFMAxhSAMQVgTAEYUwDGFIAxBWBMARhTAMb0gEb+9IBGnSgAYwrAmAIwpgCMKQBjCsBYTAAzufciHcH3EcUE4Pu4TxMFj01MAA8j6jRF4bezg3u5Rgov18u7RL2+PtZECTtUt3Ip04gG6sP9bIf1TlelPMLgd2T6cE+jN/lwNIv7yy998NsNAuPAK9z7860HpegyvbCv4zTs/XYiIiIiIiIiIpLNX2FVAcNCxrOBAAAAAElFTkSuQmCC"/>
                        </defs>
                    </svg>
                </a>

        </div>
    </div>

    <div class="row m-0">
         <div class="col col-10 col-sm-6 align-end">
            <p2>© 2022 Cardinal Capital Group UC. All Rights Reserved. Regulated by the Central Bank of Ireland</p2>
        </div> 
        <div class="col text-right col-sm-6 col-2">
            <svg class="ml-auto" width="72" height="73" viewBox="0 0 72 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M71.9997 39.5879V47.2393C58.1005 47.638 46.7791 58.8119 46.1783 72.6838H38.5215C39.1332 54.6067 53.9007 39.992 71.9997 39.5879V39.5879Z" fill="black"/>
                <path d="M33.4728 72.6838H25.8159C25.2152 58.8174 13.8937 47.638 0 47.2393V39.5879C18.1045 39.992 32.8666 54.6067 33.4728 72.6838V72.6838Z" fill="black"/>
                <path d="M71.9997 26.1246V33.776C53.9007 33.3719 39.1386 18.7682 38.5215 0.685547H46.1783C46.7791 14.552 58.1005 25.726 71.9997 26.1246V26.1246Z" fill="black"/>
                <path d="M33.4728 0.685547C32.8611 18.7627 18.099 33.3719 0 33.776V26.1246C13.8937 25.726 25.2152 14.5465 25.8159 0.685547H33.4728V0.685547Z" fill="black"/>
            </svg>
        </div> 
    </div>
</footer>




<!--////////////////SCRIPTS/////////////-->
<script>

 var element = document.getElementById("headerimg");

if(typeof(element) != 'undefined' && element != null){
   
    document.getElementById("navbar").classList.add("headerimg");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").classList.add("scrolled");
    } else {
        document.getElementById("navbar").classList.remove("scrolled");
    }
    }
} 
</script>   

<script>
    //Fading in elements on scroll
    let elementsArray = document.querySelectorAll(".tile");
    console.log(elementsArray);
    window.addEventListener('scroll', fadeIn ); 
    function fadeIn() {
        for (var i = 0; i < elementsArray.length; i++) {
            var elem = elementsArray[i]
            var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
            if (distInView < 0) {
                elem.classList.add("inView");
            } else {
                elem.classList.remove("inView");
            }
        }
    }
    fadeIn();   
</script>
<script>
    function myFunc() {
    var para = document.getElementById("Body");
    para.classList.toggle("open-burger");
    }
 </script>   
<!--////////////////SCRIPTS/////////////-->



    </body>
</html>