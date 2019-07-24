  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Light Surge -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseLightsurge" role="button" aria-expanded="false" aria-controls="collapseLightsurge"><input type="radio" name="picked" value="Light Surge" v-model="supportSelection">
        <h6>Light Surge</h6>
      </label>

      <!-- Cleansing Light -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseCleansinglight" role="button" aria-expanded="false" aria-controls="collapseCleansinglight">
        <input type="radio" name="picked" value="Cleansing Light" v-model="supportSelection">
        <h6>Cleansing Light</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-mace" class="row mx-auto pad-10 max-wide-380">

    <!-- Light Surge -->
    <div class="collapse mx-auto" id="collapseLightsurge" data-parent="#support-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Heal an ally and boost their attack.<br>HEAL = 5 HP.<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+1</span>
            Bonus ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-purple">+1</span>
            Bonus INT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Cleansing Light -->
    <div class="collapse mx-auto" id="collapseCleansinglight" data-parent="#support-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Holy light cleanses and heals you.<br>Removes all debuffs.<br>HEAL = 8 HP.<br>Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->