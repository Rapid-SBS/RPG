  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Harpoon -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseHarpoon" role="button" aria-expanded="false" aria-controls="collapseHarpoon">
        <input type="radio" name="ability" value="Harpoon" v-model="ultimateSelection">
        <h6>Harpoon</h6>
      </label>

      <!-- Bomb Arrow -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseBombarrow" role="button" aria-expanded="false" aria-controls="collapseBombarrow">
        <input type="radio" name="ability" value="Bomb Arrow" v-model="ultimateSelection">
        <h6>Bomb Arrow</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-Crossbow" class="row mx-auto pad-10 max-wide-380">

    <!-- Harpoon -->
    <div class="collapse mx-auto" id="collapseHarpoon" data-parent="#ultimate-Crossbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a spring-loaded harpoon that pierces enemy defenses.<br> DMG = Weapon ATT + Player ATT.<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">10</span>
            Weapon ATT
          </li>
        </ul>
         <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-8</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Bomb Arrow -->
    <div class="collapse mx-auto" id="collapseBombarrow" data-parent="#ultimate-Crossbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire an explosive arrow that damages all enemies.<br>DMG = Weapon ATT + Player ATT.<br> Costs 12 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">10</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->