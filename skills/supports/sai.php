  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Shadow Sense -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseShadowsense" role="button" aria-expanded="false" aria-controls="collapseShadowsense"><input type="radio" name="picked" value="Shadow Sense" v-model="supportSelection">
        <h6>Shadow Sense</h6>
      </label>

      <!-- Shadow Meld -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseShadowmeld" role="button" aria-expanded="false" aria-controls="collapseShadowmeld">
        <input type="radio" name="picked" value="Shadow Meld" v-model="supportSelection">
        <h6>Shadow Meld</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-sai" class="row mx-auto pad-10 max-wide-380">

    <!-- Shadow Sense -->
    <div class="collapse mx-auto" id="collapseShadowsense" data-parent="#support-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Sharpen your focus, enhancing your abilities.<br>Gain bonus ATT and DEF for 2 turns.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+1</span>
            Bonus ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+1</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Shadow Meld -->
    <div class="collapse mx-auto" id="collapseShadowmeld" data-parent="#support-sai">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Become one with the shadows.<br>Grants Hidden buff for 1 turn.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <strong>Hidden</strong>: You cannot be targeted by allies or enemies.
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->