<script>
export default {
  data() {
    return {
      form: {
        abholort: '',
        zielort: '',
        fahrzeugtyp: '',
        ladezeit: '',
        zustelloption: 'express',
        terminDatum: ''
      }
    };
  },
  methods: {
    submitBooking() {
      // Hier kannst du Axios verwenden, um die Buchungsdaten an dein Backend zu senden
      console.log('Buchung gesendet:', this.form);

      // Beispiel: Axios-Anfrage
      // axios.post('https://api.example.com/buchung', this.form)
      //   .then(response => {
      //     console.log('Buchung erfolgreich:', response.data);
      //   })
      //   .catch(error => {
      //     console.error('Fehler bei der Buchung:', error);
      //   });
    }
  }
};
</script>

<template>
    <main>
        <div>
            <h1>Wählen Sie Ihre Transportart und lassen Sie uns den Rest erledigen!</h1>
        </div>

        <div class="container">
            <form @submit.prevent="submitBooking">
      <!-- Abholort -->
      <div class="form-group">
        <label for="pickup-location">Abholort:</label>
        <input type="text" v-model="form.abholort" id="pickup-location" placeholder="Abholort eingeben" required />
      </div>

      <!-- Zielort -->
      <div class="form-group">
        <label for="dropoff-location">Zielort:</label>
        <input type="text" v-model="form.zielort" id="dropoff-location" placeholder="Zielort eingeben" required />
      </div>

      <!-- Fahrzeugtyp -->
      <div class="form-group">
        <label for="vehicle-type">Fahrzeugtyp:</label>
        <select v-model="form.fahrzeugtyp" id="vehicle-type" required>
          <option value="velo">Velo</option>
          <option value="pkw">PKW</option>
          <option value="kombi">Kombi</option>
          <option value="lieferwagen">Lieferwagen</option>
        </select>
      </div>

      <!-- Ladezeit -->
      <div class="form-group">
        <label for="ladezeit">Ladezeit:</label>
        <input type="time" v-model="form.ladezeit" id="ladezeit" required />
      </div>

      <!-- Express oder Termin -->
      <div class="form-group">
        <label>Zustelloption:</label>
        <div>
          <input type="radio" id="express" value="express" v-model="form.zustelloption" />
          <label for="express">Express</label>
        </div>
        <div>
          <input type="radio" id="termin" value="termin" v-model="form.zustelloption" />
          <label for="termin">Bestimmter Termin</label>
        </div>
        <div v-if="form.zustelloption === 'termin'">
          <label for="termin-datum">Wähle einen Termin:</label>
          <input type="date" v-model="form.terminDatum" id="termin-datum" />
        </div>
      </div>

      <!-- Absenden -->
      <button type="submit">Buchung abschicken</button>
    </form>

        </div>
    </main>
</template>

<style scoped>
    h1{
        display: flex;
        justify-content: center;
        color: azure;
    }
    .container{
        display: flex;
        justify-content: center;
        background-color: grey;
        height: 600px;
        width: 400px;
    }

</style>
