<div class="secondary-section gray">
    <h3 class="svgbg">Bilateral Talks</h3>
    <div class="secondary-content">
        <ul>
            <li><span style="font-size:13px;">Participants</span><span class="number">89</span></li>
            <li><span style="font-size:13px;">Meetings Requested</span><span class="number">339</span></li>
            <li><span style="font-size:13px;">Meetings Accepted</span><span class="number">165</span></li>
        </ul>
    </div>
</div>

<div class="secondary-section">
    <h3 class="svgbg">Participants</h3>

    <div class="secondary-content">
        <ul class="participants">

            <li>
                <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Bosnia_Herzegovina.png')?> "/> </span>
                <span><a href="#">Bosnia-Herzegovina</a></span>
                <span class="number">7</span>
            </li>

            <li>
                <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Bulgaria.png')?> "/> </span>
                <span><a href="#">Bulgaria</a></span>
                <span class="number">4</span>
            </li>

            <li>
                <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Greece.png')?> "/></span>
                <span><a href="#">Greece</a></span>
                <span class="number">3</span>
            </li>

            <li>
                <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Hungary.png')?> "/></span>
                <span><a href="/members/country/5/Hungary">Hungary</a></span>
                <span class="number">1</span>
            </li>

            <li>
                <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Italy.png')?> "/></span>
                <span><a href="/members/country/6/Italy">Italy</a></span>
                <span class="number">1</span>
            </li>

            <li>
                    <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Macedonia.png" alt="Macedonia.png')?> /></span>
                    <span><a href="/members/country/126/Macedonia">Macedonia</a></span>
                <span class="number">47</span>
            </li>

            <li>
                    <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Montenegro.png" alt="Montenegro.png')?> /></span>
                    <span><a href="/members/country/140/Montenegro">Montenegro</a></span>
                <span class="number">7</span>
            </li>

            <li>
                    <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Poland.png" alt="Poland.png')?> />
                    </span><span><a href="/members/country/168/Poland">Poland</a></span>
                <span class="number">3</span>
            </li>

            <li>
                    <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Romania.png" alt="Romania.png')?> /></span>
                    <span><a href="/members/country/11/Romania">Romania</a></span>
                <span class="number">3</span>
            </li>

            <li>
                    <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Sr.png" alt="Sr.png')?> /></span>
                    <span><a href="/members/country/7/Serbia">Serbia</a></span>
                <span class="number">9</span>
            </li>

            <li>
                    <span class="flag"><img src="<?=base_url('assets/img/thumbs/24z24_Slovenia.png" alt="Slovenia.png')?> />
                    </span><span><a href="/members/country/185/Slovenia">Slovenia</a></span>
                <span class="number">4</span>
            </li><br>

            <li class="total">
                <span>Total of Participants</span><span class="number">89</span>
            </li>

        </ul>
    </div>
</div>

<div class="secondary-section gray">
    <h3 class="svgbg">Profile views</h3>
    <div class="secondary-content">
        <ul>
            <li><span>Before Event</span><span class="number">7049</span></li>
            <li><span>After Event</span><span class="number">13226</span></li>
        </ul>
    </div>
</div>

<div>
    <h3 class="svgbg">ORGANIZERS</h3>


    <h3 class="svgbg">CO-ORGANIZERS</h3>


    <h3 class="svgbg">SUPPORTERS</h3>


    <h3 class="svgbg">LOCATION</h3>


</div>



<?php foreach($images->result() as $img) : ?>
    <div>
        <div class="thumbnail">
            <?=img($img->file)?>
        </div>
    </div>
<?php endforeach; ?>