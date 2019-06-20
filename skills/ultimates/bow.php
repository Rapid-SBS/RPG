  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Rapid Fire -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseRapidfire" role="button" aria-expanded="false" aria-controls="collapseRapidfire">
        <input type="radio" name="ability" value="Rapid Fire" v-model="ultimateSelection">
        <h6>Rapid Fire</h6>
      </label>

      <!-- Arrow Storm -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseArrowstorm" role="button" aria-expanded="false" aria-controls="collapseArrowstorm">
        <input type="radio" name="ability" value="Arrow Storm" v-model="ultimateSelection">
        <h6>Arrow Storm</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-bow" class="row mx-auto pad-1 max-wide-380">

    <!-- Rapid Fire -->
    <div class="collapse mx-auto" id="collapseRapidfire" data-parent="#ultimate-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a deadly stream of arrows at one enemy.<br>DMG = 4 x (Player ATT).<br> Costs 9 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Arrow Storm -->
    <div class="collapse mx-auto" id="collapseArrowstorm" data-parent="#ultimate-bow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Hail arrows down upon all enemies.<br> DMG = Weapon ATT + Player ATT.<br> Costs 11 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">9</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->