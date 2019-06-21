  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Windmill Shuriken -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseWindmillshuriken" role="button" aria-expanded="false" aria-controls="collapseWindmillshuriken">
        <input type="radio" name="ability" value="Windmill Shuriken" v-model="ultimateSelection">
        <h6>Windmill Shuriken</h6>
      </label>

      <!-- Shadow Storm -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseShadowstorm" role="button" aria-expanded="false" aria-controls="collapseShadowstorm">
        <input type="radio" name="ability" value="Shadow Storm" v-model="ultimateSelection">
        <h6>Shadow Storm</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-shuriken" class="row mx-auto pad-10 max-wide-380">

    <!-- Windmill Shuriken -->
    <div class="collapse mx-auto" id="collapseWindmillshuriken" data-parent="#ultimate-shuriken">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Hurl a giant shuriken at an enemy.<br>DMG = Weapon ATT + Player ATT.<br> Costs 8 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">16</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Shadow Storm -->
    <div class="collapse mx-auto" id="collapseShadowstorm" data-parent="#ultimate-shuriken">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">You and your shadow clones leap into the air and rain shuriken down upon all enemies.<br>DMG = 3 x (Player ATT)<br> Costs 11 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->