  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Battle Roar -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseBattleroar" role="button" aria-expanded="false" aria-controls="collapseBattleroar"><input type="radio" name="picked" value="Battle Roar" v-model="supportSelection">
        <h6>Battle Roar</h6>
      </label>

      <!-- Bloodlust -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseBloodlust" role="button" aria-expanded="false" aria-controls="collapseBloodlust">
        <input type="radio" name="picked" value="Bloodlust" v-model="supportSelection">
        <h6>Bloodlust</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-battleaxe" class="row mx-auto pad-10">

    <!-- Battle Roar -->
    <div class="collapse mx-auto" id="collapseBattleroar" data-parent="#support-battleaxe">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Let out a fierce battle roar that intimidates enemies and emboldens allies.<br>Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+2</span>
            Ally ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+2</span>
            Ally INT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">-2</span>
            Enemy ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Bloodlust -->
    <div class="collapse mx-auto" id="collapseBloodlust" data-parent="#support-battleaxe">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Increase DEF for 1 turn. On your next attack, you heal the same amount of damage you deal.<br>Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+2</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->