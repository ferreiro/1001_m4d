
    <?php get_header(); ?>

    <div id="ajaxCenterContainer">
    <div id="ajaxCenterContainerint">

        <style type="text/css">

        .sectionContentLeft,
        .sectionContentRight,
        .linea_derecha,
        .footer
        {
            display: none !important;
        }
        </style>

        <div class="Uploder">
            <div class="UploderContent">
            <h1>
                Upload your track
            </h1>
            <form method="" action="">

                <div class="UploaderInput">
                    <div class="UploaderInputLeft">
                        <p>Song Title</p>
                    </div>
                    <div class="UploaderInputRight">
                        <input type="text" requiered autofocus placeholder="Song Title" >
                    </div> 
                </div>
                <div class="UploaderInput">
                    <div class="UploaderInputLeft">
                        <p>Artist</p>
                    </div>
                    <div class="UploaderInputRight">
                        <input type="text" requiered autofocus placeholder="Artist name" >
                    </div> 
                </div> 
                <div class="UploaderInput">
                    <div class="UploaderInputTitle">
                        <h2>Song Url</h2>
                        <p>Choose one of this providers</p>
                    </div>
                    <div class="UploaderInputChoose">
                        <a href="#" id="Soundcloud">
                            <span>Soundcloud</span
                        </a>
                        <a href="#" id="Zippy">
                            <span>ZippyShare</span
                        </a>
                        <a href="#" id="Mega">
                            <span>Mega</span
                        </a>
                    </div>
                    <div class="UploaderInputUrl">
                        <input type="url" id="url" requiered autofocus >
                    </div>
                </div> 
                <div class="UploaderInput">
                    <div class="UploaderInputLeft">
                        <p>Artist</p>
                    </div>
                    <div class="UploaderInputRight">
                        <input type="text" requiered autofocus placeholder="Your email " >
                    </div> 
                </div>  
                <div class="UploaderInput" style="margin-top:-27px;"> 
                    <input type="submit" value="Upload track">
                </div>  
        
            </form>
            </div>      
        </div>

    </div>
    </div>

</div>
</div><!-- Fin section wrap -->
 
<?php get_footer(); ?>
