<template>
    <form @submit.prevent="register">
    <div class="container">
      <input v-model="company" placeholder="Company Name" />
      <input v-model="firstName" placeholder="First Name" required />
      <input v-model="lastName" placeholder="Last Name" required />
      <input v-model="street" placeholder="Street" required />
      <input v-model="phone" type="tel" placeholder="Phone Number" required />
      <input v-model="email" type="email" placeholder="Email" required />
      <input v-model="password" type="password" placeholder="Password" required />
      <input v-model="password_confirmation" type="password" placeholder="Confirm Password" required />
      <select v-model="role" required>
        <option value="" disabled>Select Role</option>
        <option value="client">Client</option>
        <option value="courier">Courier</option>
        
      </select>
      <button type="submit">Register</button>
    </div>
    </form>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        company: '',
        firstName: '',
        lastName: '',
        street: '',
        phone: '',
        email: '',
        password: '',
        password_confirmation: '',
        role: ''
      };
    },
    methods: {
      async register() {
        try {
          const response = await axios.post('http://localhost:8000/api/register', {
            company: this.company,
            first_name: this.firstName,
            last_name: this.lastName,
            street: this.street,
            phone: this.phone,
            email: this.email,
            password: this.password,
            password_confirmation: this.password_confirmation,
            role: this.role
          });
          console.log(response.data);
        } catch (error) {
          console.error(error.response.data);
        }
      }
    }
  };
  </script>
  <style scoped>
    .container{
      display: flex;
      flex-direction: column;
      margin-top: 20px;
      width: 600px;
  
    }
  </style>