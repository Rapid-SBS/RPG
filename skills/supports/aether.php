  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Spectral Shift -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseSpectralshift" role="button" aria-expanded="false" aria-controls="collapseSpectralshift"><input type="radio" name="picked" value="Spectral Shift" v-model="supportSelection">
        <h6>Spectral Shift</h6>
      </label>

      <!-- Light Prism -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseLightprism" role="button" aria-expanded="false" aria-controls="collapseLightprism">
        <input type="radio" name="picked" value="Light Prism" v-model="supportSelection">
        <h6>Light Prism</h6>
      </label>
      <br>
      <h4 style="display: none;" id="support-selection">{{supportSelection}}</h4>
    </div>
  </div><!-- /.row -->

  <div id="support-aether" class="row mx-auto pad-10">

    <!-- Spectral Shift -->
    <div class="collapse mx-auto" id="collapseSpectralshift" data-parent="#support-aether">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Partially phase out of this dimension for 1 turn.<br>You are immune to damage but unable to support.<br>Costs 4 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Light Prism -->
    <div class="collapse mx-auto" id="collapseLightprism" data-parent="#support-aether">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Create a prism that distorts light around all<br>enemies. Applies Light Prism debuff for 2 turns.<br>Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">-1</span>
            Enemy ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-1</span>
            Enemy DEF
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">-1</span>
            Enemy RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->