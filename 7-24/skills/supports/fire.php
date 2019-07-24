  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Flame Guard -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseFlameguard" role="button" aria-expanded="false" aria-controls="collapseFlameguard"><input type="radio" name="picked" value="Flame Guard" v-model="supportSelection">
        <h6>Flame Guard</h6>
      </label>

      <!-- Heat Absorption -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseHeatabsorption" role="button" aria-expanded="false" aria-controls="collapseHeatabsorption">
        <input type="radio" name="picked" value="Heat Absorption" v-model="supportSelection">
        <h6>Heat Absorption</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-fire" class="row mx-auto pad-10 max-wide-380">

    <!-- Flame Guard -->
    <div class="collapse mx-auto" id="collapseFlameguard" data-parent="#support-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Boosts RES and grants immunity to all ice abilities for 1 turn.<br> Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+2</span>
            Bonus RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Heat Absorption -->
    <div class="collapse mx-auto" id="collapseHeatabsorption" data-parent="#support-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Gain Fire Eater buff for 2 turns. Converts damage from fire attacks into healing.<br>Costs 3 Mana.
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->