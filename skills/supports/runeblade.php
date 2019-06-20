  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Blade Block -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseBladeblock" role="button" aria-expanded="false" aria-controls="collapseBladeblock"><input type="radio" name="picked" value="Blade Block" v-model="supportSelection">
        <h6>Blade Block</h6>
      </label>

      <!-- Power Rune -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapsePowerrune" role="button" aria-expanded="false" aria-controls="collapsePowerrune">
        <input type="radio" name="picked" value="Power Rune" v-model="supportSelection">
        <h6>Power Rune</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-runeblade" class="row mx-auto pad-10 max-wide-380">

    <!-- Blade Block -->
    <div class="collapse mx-auto" id="collapseBladeblock" data-parent="#support-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Shield yourself with the broad side of your runeblade.<br>Raises DEF for 1 turn.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+2</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Power Rune -->
    <div class="collapse mx-auto" id="collapsePowerrune" data-parent="#support-runeblade">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Supercharge your runeblade with a Power Rune.<br>Boosts INT for 2 turns.<br>Costs 3 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-purple">+2</span>
            Bonus INT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->