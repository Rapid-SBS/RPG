  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Bone Shatter -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseBoneshatter" role="button" aria-expanded="false" aria-controls="collapseBoneshatter">
        <input type="radio" name="ability" value="Bone Shatter" v-model="ultimateSelection">
        <h6>Bone Shatter</h6>
      </label>

      <!-- Seismic Quake -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseSeismicquake" role="button" aria-expanded="false" aria-controls="collapseSeismicquake">
        <input type="radio" name="ability" value="Seismic Quake" v-model="ultimateSelection">
        <h6>Seismic Quake</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-warhammer" class="row mx-auto pad-10 max-wide-380">

    <!-- Bone Shatter -->
    <div class="collapse mx-auto" id="collapseBoneshatter" data-parent="#ultimate-warhammer">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Slam your warhammer hard enough to shatter bone and steel.<br>Pierces enemy DEF.<br>DMG = 4 x (Player ATT).<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-6</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Seismic Quake -->
    <div class="collapse mx-auto" id="collapseSeismicquake" data-parent="#ultimate-warhammer">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Strike the ground in front of you and drive massive rock formations out of the earth beneath your enemies.<br>DMG = 3 x (Player ATT).<br> Costs 12 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->