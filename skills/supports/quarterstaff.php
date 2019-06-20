  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Mend -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseMend" role="button" aria-expanded="false" aria-controls="collapseMend"><input type="radio" name="picked" value="Mend" v-model="supportSelection">
        <h6>Mend</h6>
      </label>

      <!-- Binding Light -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseBindinglight" role="button" aria-expanded="false" aria-controls="collapseBindinglight">
        <input type="radio" name="picked" value="Binding Light" v-model="supportSelection">
        <h6>Binding Light</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-quarterstaff" class="row mx-auto pad-10 max-wide-380">

    <!-- Mend -->
    <div class="collapse mx-auto" id="collapseMend" data-parent="#support-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Heal all allies.<br>HEAL = Player INT.<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Binding Light -->
    <div class="collapse mx-auto" id="collapseBindinglight" data-parent="#support-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Trap your foe with rings of light, applying Stun debuff for 1 turn.<br> Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->