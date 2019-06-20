  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Transcendence -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseTranscendence" role="button" aria-expanded="false" aria-controls="collapseTranscendence"><input type="radio" name="picked" value="Transcendence" v-model="supportSelection">
        <h6>Transcendence</h6>
      </label>

      <!-- Zen Aura -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseZenaura" role="button" aria-expanded="false" aria-controls="collapseZenaura">
        <input type="radio" name="picked" value="Zen Aura" v-model="supportSelection">
        <h6>Zen Aura</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-brawler" class="row mx-auto pad-10 max-wide-380">

    <!-- Transcendence -->
    <div class="collapse mx-auto" id="collapseTranscendence" data-parent="#support-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Transcend the pain and trials you've experienced, restoring life to your body.<br>HEAL = 8 HP.<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Zen Aura -->
    <div class="collapse mx-auto" id="collapseZenaura" data-parent="#support-brawler">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Gift your allies a moment of pure serenity, restoring their mana.<br> Costs 8 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">+4</span>
            Ally Mana
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->