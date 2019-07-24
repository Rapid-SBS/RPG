  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Battering Assault -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseBatteringassault" role="button" aria-expanded="false" aria-controls="collapseBatteringassault">
        <input type="radio" name="ability" value="Battering Assault" v-model="ultimateSelection">
        <h6>Battering Assault</h6>
      </label>

      <!-- Unbreakable Spirit -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseUnbreakablespirit" role="button" aria-expanded="false" aria-controls="collapseUnbreakablespirit">
        <input type="radio" name="ability" value="Unbreakable Spirit" v-model="ultimateSelection">
        <h6>Unbreakable Spirit</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-bostaff" class="row mx-auto pad-10 max-wide-380">

    <!-- Battering Assault -->
    <div class="collapse mx-auto" id="collapseBatteringassault" data-parent="#ultimate-bostaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Drive your oppponent back with an<br>overwhelming combo attack.<br> DMG = 5 x (Player ATT).<br> Costs 9 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Unbreakable Spirit -->
    <div class="collapse mx-auto" id="collapseUnbreakablespirit" data-parent="#ultimate-bostaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Strengthen the spirit of you and your alies,<br>sharply raising ally RES for 1 turn.<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+8</span>
            Ally RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->