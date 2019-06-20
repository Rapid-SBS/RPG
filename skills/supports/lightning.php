  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Energize -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseEnergize" role="button" aria-expanded="false" aria-controls="collapseEnergize"><input type="radio" name="picked" value="Energize" v-model="supportSelection">
        <h6>Energize</h6>
      </label>

      <!-- Static Barrier -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseStaticbarrier" role="button" aria-expanded="false" aria-controls="collapseStaticbarrier">
        <input type="radio" name="picked" value="Static Barrier" v-model="supportSelection">
        <h6>Static Barrier</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-lightning" class="row mx-auto pad-10 max-wide-380">

    <!--Energize -->
    <div class="collapse mx-auto" id="collapseEnergize" data-parent="#support-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Energize an ally, allowing them to attack twice in one turn.<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Static Barrier -->
    <div class="collapse mx-auto" id="collapseStaticbarrier" data-parent="#support-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Boost the RES of yourself or an ally for 1 turn.<br> Costs 6 Mana.</p>
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