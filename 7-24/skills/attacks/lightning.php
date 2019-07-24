  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Lightning Bolt -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseLightningbolt" role="button" aria-expanded="false" aria-controls="collapseLightningbolt">
        <input type="radio" name="ability" value="Lightning Bolt" v-model="attackSelection">
        <h6>Lightning Bolt</h6>
      </label>

      <!-- Arc Sphere -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseArcsphere" role="button" aria-expanded="false" aria-controls="collapseArcsphere">
        <input type="radio" name="ability" value="Arc Sphere" v-model="attackSelection">
        <h6>Arc Sphere</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-lightning" class="row mx-auto pad-10 max-wide-380">

    <!-- Lightning Bolt -->
    <div class="collapse mx-auto" id="collapseLightningbolt" data-parent="#attack-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a bolt of lightning at an enemy.<br>DMG = 2 x (Player INT).<br> Costs 4 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Arc Sphere -->
    <div class="collapse mx-auto" id="collapseArcsphere" data-parent="#attack-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Create a charged sphere that shocks enemies within.<br> DMG = Weapon ATT + Player INT.<br> Costs 5 Mana.</p>
        </div>
        <ul class="list-group text-center">
          <li class="list-group-item align-items-center light-transparency bg-blue" style="padding: .35rem 1.25rem;">
            <span class="badge badge-light text-orange">2</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->