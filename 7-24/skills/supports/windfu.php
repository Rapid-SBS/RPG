  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Levitate -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseLevitate" role="button" aria-expanded="false" aria-controls="collapseLevitate"><input type="radio" name="picked" value="Levitate" v-model="supportSelection">
        <h6>Levitate</h6>
      </label>

      <!-- Wind Wall -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseWindwall" role="button" aria-expanded="false" aria-controls="collapseWindwall">
        <input type="radio" name="picked" value="Wind Wall" v-model="supportSelection">
        <h6>Wind Wall</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-windfu" class="row mx-auto pad-10 max-wide-380">

    <!--Levitate -->
    <div class="collapse mx-auto" id="collapseLevitate" data-parent="#support-windfu">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Use your mastery of the wind to float in the air, allowing you to attack from a vantage point.<br>Boosts INT for 1 turn.<br>Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-purple">+4</span>
            Bonus INT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Wind Wall -->
    <div class="collapse mx-auto" id="collapseWindwall" data-parent="#support-windfu">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Create a barrier of wind, boosting ally RES for 1 turn.<br> Costs 8 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+4</span>
            Bonus RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->