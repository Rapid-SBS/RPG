  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Targeted Aim -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseTargetedaim" role="button" aria-expanded="false" aria-controls="collapseTargetedaim"><input type="radio" name="picked" value="Targeted Aim" v-model="supportSelection">
        <h6>Targeted Aim</h6>
      </label>

      <!-- Nature's Blessing -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseNaturesblessing" role="button" aria-expanded="false" aria-controls="collapseNaturesblessing">
        <input type="radio" name="picked" value="Nature's Blessing" v-model="supportSelection">
        <h6>Nature's Blessing</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-longbow" class="row mx-auto pad-10 max-wide-380">

    <!-- Targeted Aim -->
    <div class="collapse mx-auto" id="collapseTargetedaim" data-parent="#support-longbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Target an enemy's weakness. Increases Critical Hit Rate of yourself or an ally by 1x (Up to a maximum of 3x) for 1 turn.<br> Costs 2 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Nature's Blessing -->
    <div class="collapse mx-auto" id="collapseNaturesblessing" data-parent="#support-longbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Draw upon your connection with nature to heal your allies.<br>HEAL = Player INT.<br> Costs 3 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->