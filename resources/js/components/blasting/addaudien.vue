<template>
  <div>
    <div class="mb-3">
      <input type="text" v-model="searchQuery" class="form-control" placeholder="Search by name...">
    </div>
    <div class="mb-3">
      <select v-model="selectedCity" @change="logSelectedCity" class="form-select">
        <option value="">All Cities</option>
        <option v-for="segment in segments" :key="segment.id" :value="segment.segmen">{{ segment.segmen }}</option>
      </select>
    </div>
    <div class="mb-3">
      <div v-for="contact in filteredContacts" :key="contact.id" class="form-check">
        <input 
          class="form-check-input" 
          type="checkbox" 
          :id="'checkbox-' + contact.id" 
          v-model="contact.checked"
        >
        <label class="form-check-label" :for="'checkbox-' + contact.id">{{ contact.nama }}</label>
      </div>
    </div>
    <button class="btn btn-primary" @click="addAudien">Add Audien</button>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  props: ['id'],
  data() {
    return {
      searchQuery: '',
      selectedCity: '',
      contacts: [],
      segments: [],
      selectedContacts: [],
    };
  },
  computed: {
    filteredContacts() {
      let filtered = this.contacts;

      if (this.searchQuery) {
        filtered = filtered.filter(contact =>
          contact.nama.toLowerCase().includes(this.searchQuery.toLowerCase())
        );
      }

      if (this.selectedCity) {
        filtered = filtered.filter(contact => contact.kota === this.selectedCity);
      }

      console.log('Filtered Contacts:', filtered);
      return filtered;
    }
  },
  methods: {
    fetchContacts() {
      axios.get(`/blasting/champaign/audien/${this.id}/getcontact`)
        .then(response => {
          if (Array.isArray(response.data)) {
            this.contacts = response.data.map(contact => ({
              ...contact,
              checked: false
            }));
          } else {
            console.error('Unexpected data structure for contacts:', response.data);
            this.contacts = [];
          }
        })
        .catch(error => {
          console.error('Failed to fetch contacts:', error);
        });
    },
    fetchSegments() {
      axios.get(`/blasting/champaign/audien/${this.id}/getsegmen`)
        .then(response => {
          if (Array.isArray(response.data)) {
            this.segments = response.data;
          } else {
            console.error('Unexpected data structure for segments:', response.data);
            this.segments = [];
          }
        })
        .catch(error => {
          console.error('Failed to fetch segments:', error);
        });
    },
    addAudien() {
      const payload = {
        idchampaign: this.id,
        contacts: this.contacts.filter(contact => contact.checked).map(contact => contact.id),
      };

      axios.post(`/blasting/champaign/audien/${this.id}/saveaudien`, payload)
        .then(response => {
          alert('Audien added successfully');
          window.location.href = `/blasting/champaign/audien/${this.id}`;
        })
        .catch(error => {
          console.error('Failed to add audien:', error);
          alert('Failed to add audien');
        });
    },
    logSelectedCity() {
      console.log('Selected City:', this.selectedCity);
    }
  },
  watch: {
    contacts: {
      handler(newContacts) {
        this.selectedContacts = newContacts.filter(contact => contact.checked).map(contact => contact.id);
      },
      deep: true
    }
  },
  created() {
    this.fetchContacts();
    this.fetchSegments();
  }
};
</script>


<style>
/* Ensure proper alignment */
.form-check {
  display: flex;
  align-items: center;
  margin-bottom: 0.5rem;
}

.form-check-input {
  margin-right: 0.5rem;
}

.form-check-label {
  margin-bottom: 0; /* Remove any default margin */
}
</style>