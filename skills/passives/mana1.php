  <div class="row justify-content-center">

    <div id="lvl-4-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Mana Regen I -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseMana1" role="button" aria-expanded="false" aria-controls="collapseMana1">
        <input type="radio" name="passive" value="Mana I" v-model="lvl4Selection">
        <h6>Mana Regen I</h6>
      </label>

      <br>
      <h4 id="lvl-4-selection">{{lvl4Selection}}</h4>
    </div>
  </div><!-- /.row -->

  <div id="passive-mana1" class="row mx-auto pad-10">

    <!-- Mana Regen I -->
    <div class="collapse mx-auto" id="collapseMana1" data-parent="#passive-mana1">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Using your Basic Ability restores 1 mana.<br>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->