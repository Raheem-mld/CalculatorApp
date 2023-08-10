<template>
    <div>
      <h1>Simple Calculator</h1>
      <form @submit.prevent="calculate">
        <input type="number" v-model="num1" required>
        <select v-model="operation" required>
          <option value="plus">+</option>
          <option value="minus">-</option>
          <option value="multiply">*</option>
          <option value="divide">/</option>
        </select>
        <input type="number" v-model="num2" required>
        <button type="submit">Calculate</button>
      </form>
      <div v-if="result !== null">
        Result: {{ result }}
      </div>
    </div>
  </template>
  
  <script>

import { ref } from 'vue'; // Import ref from Vue
import axios from 'axios'; // Import axios

  export default {
    data() {
      return {
        num1: '',
        num2: '',
        operation: 'plus',
        result: null,
      };
    },
    methods: {
      calculate() {
        axios.post('/calculate', {
          operation: this.operation,
          num1: this.num1,
          num2: this.num2,
        })
        .then(response => {
          this.result = response.data.result;
        })
        .catch(error => {
          console.error(error);
        });
      },
    },
  };
  </script>
  