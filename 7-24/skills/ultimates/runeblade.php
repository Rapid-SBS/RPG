  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Thunder Blade -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseThunderblade" role="button" aria-expanded="false" aria-controls="collapseThunderblade">
        <input type="radio" name="ability" value="Thunder Blade" v-model="ultimateSelection">
        <h6>Thunder Blade</h6>
      </label>

      <!-- Eruption -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseEruption" role="button" aria-expanded="false" aria-controls="collapseEruption">
        <input type="radio" name="ability" value="Eruption" v-model="ultimateSelection">
        <h6>Eruption</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-runeblade" class="row mx-auto pad-10 max-wide-380">

    <!-- Thunder Blade -->
    <div class="collapse mx-auto" id="collapseThunderblade" data-parent="#ultimate-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Charge your blade with electricity and attack an enemy with extreme speed.<br>DMG = 4 x (Player INT).<br> Costs 11 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Eruption -->
    <div class="collapse mx-auto" id="collapseEruption" data-parent="#ultimate-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Channel extreme heat with your runeblade and cause the ground under your enemies to erupt.<br>Applies Burn debuff.<br>DMG = 3 x (Player INT).<br> Costs 12 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->