  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Nova Beam -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseNovabeam" role="button" aria-expanded="false" aria-controls="collapseNovabeam">
        <input type="radio" name="ability" value="Nova Beam" v-model="ultimateSelection">
        <h6>Nova Beam</h6>
      </label>

      <!-- Meteor Strike -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseArrowstorm" role="button" aria-expanded="false" aria-controls="collapseArrowstorm">
        <input type="radio" name="ability" value="Meteor Strike" v-model="ultimateSelection">
        <h6>Meteor Strike</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-fire" class="row mx-auto pad-10 max-wide-380">

    <!-- Nova Beam -->
    <div class="collapse mx-auto" id="collapseNovabeam" data-parent="#ultimate-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a beam of extreme heat at one enemy that pierces all of their defenses.<br> Ignores all enemy RES. <br> DMG = 3 x (Player INT).<br> Costs 9 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-blue">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Meteor Strike -->
    <div class="collapse mx-auto" id="collapseMeteorstrike" data-parent="#ultimate-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Summon a meteor from the heavens to crash into your enemies. <br> DMG = 4 x (Player INT).<br> Costs 14 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->