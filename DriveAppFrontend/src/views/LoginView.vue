<script setup>
import AuthService from "@/services/AuthService.js";
import { ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const user = ref({
  email: "estella33@example.org",
  password: "password",
});

const login = async () => {
  try {
    await AuthService.login(user.value);
    const response = await AuthService.getAuthUser();
    console.log(response.data);
  } catch (error) {
    console.log(error);
  }
};
</script>

<template>

  <form action="" method="post" @submit.prevent="login">
    
    <!-- <img src="../assets/" alt="Das Logo" class="logo"> -->
  <main>
      <div>
        <h1>Willkommen zurück bei DriveApp!</h1>
      </div>

    <div class="box"> 
      <div class="login-container">
          <div class="formgroup">
            <label for="">E-Mail</label>
            <input class="placeholder" type="email" name="email" v-model="user.email" />
          </div>

        <div class="formgroup">
          <label for="">Passwort</label>
          <input class="placeholder" type="password" name="password" v-model="user.password" />
        </div>
    
        <div>
          <button type="submit">Login</button>
        </div>
      </div>
    </div> 
      
 
  </main>   

  </form>
</template>


<style scoped>
  
  h1{
    display: flex;
    justify-content: center;
    color: azure;
  }
  .box{
    display: flex;
    justify-content: center;
    
  }

  .login-container{
    display: flex;
    justify-content: center;
    flex-direction: column;

    width: 400px;
  }
  .formgroup{
    display: flex;
    flex-direction: column;
  }



</style>

