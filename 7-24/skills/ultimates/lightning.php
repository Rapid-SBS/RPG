  <div class="row justify-content-center">

   <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Volt Driver -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseVoltdriver" role="button" aria-expanded="false" aria-controls="collapseVoltdriver">
        <input type="radio" name="ability" value="Volt Driver" v-model="ultimateSelection">
        <h6>Volt Driver</h6>
      </label>

      <!-- Thunder Rage -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseThunderrage" role="button" aria-expanded="false" aria-controls="collapseThunderrage">
        <input type="radio" name="ability" value="Thunder Rage" v-model="ultimateSelection">
        <h6>Thunder Rage</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-lightning" class="row mx-auto pad-10 max-wide-380">

    <!-- Volt Driver -->
    <div class="collapse mx-auto" id="collapseVoltdriver" data-parent="#ultimate-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire spiraling beams of lightning at one enemy. <br>Never misses, but cannot Crit.<br>DMG = 5 x (Player INT).<br> Costs 11 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">0x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Thunder Rage -->
    <div class="collapse mx-auto" id="collapseThunderrage" data-parent="#ultimate-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Call forth storm clouds and bombard all enemies with lightning<br> DMG = 3 x (Player INT).<br> Costs 11 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->