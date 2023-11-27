<?php
get_header();
?>

<div class="not-found-page" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/sixth-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow left"></div>
    <div class="shadow bottom"></div>
    <div class="shadow right"></div>
    <div class="container">
        <h1 class="white">404</h1>
        <p class="white">KLAIDA, puslapis nerastas - apgailestaujame, tačiau </br>puslapis kurio ieškote neegzistuoja.</p>
        <div class="blue-button-area">
            <a href="<?php echo get_home_url(); ?>" class="btn-primary">Grįžti į pradinį puslapį
                <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005">
                      <path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();