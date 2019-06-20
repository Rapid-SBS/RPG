  <div class="row justify-content-center">

    <div id="lvl-9-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Mana Regen II -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseMana2" role="button" aria-expanded="false" aria-controls="collapseMana2">
        <input type="radio" name="passive" value="Mana II" v-model="lvl9Selection">
        <h6>Mana Regen II</h6>
      </label>

      <br>
      <p class="jhide" id="lvl-9-selection">{{lvl9Selection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="passive-mana2" class="row mx-auto pad-10">

    <!-- Mana Regen II -->
    <div class="collapse mx-auto" id="collapseMana2" data-parent="#passive-mana2">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Regenerate an additional 1 mana per turn.<br>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->