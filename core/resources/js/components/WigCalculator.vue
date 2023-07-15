<template>
    <div class=" max-w-[460px] w-full relative shadow-2xl shadow-[#9B309D]  bg-white  rounded-2xl ">
                    <div class=" w-full relative rounded-t-2xl overflow-hidden ">
                        <div class=" w-full bg-[#9B309D] flex">
                            <img class=" m-auto" src="/images/bg-cta-subscribe-title.png" alt="">
                        </div>
    
                        <div class=" w-full absolute top-5 flex flex-col items-center space-y-4 left-0 py-2">
                            <h1 class=" text-white text-center whitespace-nowrap text-4xl sm:text-5xl uppercase font-bold">wigs & phones</h1>
                            <div class=" flex items-center space-x-2 pt-2 sm:pt-0">
                                <div class=" w-28 h-28 rounded-full ring ring-[#b437b6]  overflow-hidden">
                                <img src="/images/wig.jpeg" class=" w-full h-full" alt="">
                            </div>
                            <div class=" w-28 h-28 rounded-full ring ring-[#b437b6]  overflow-hidden">
                                <img src="/images/phone.jpeg" class=" w-full h-full" alt="">
                            </div>
                            </div>
                        </div>

                        <div class=" px-4 pt-10 pb-4 relative flex flex-col items-start space-y-4">
                                <div class=" w-full flex flex-col items-start space-y-2">
                                    <label for="wig" class=" text-gray-400 text-sm">Total in USD ($)</label>
                                    <input v-model="price" type="number" id="wig" placeholder="Price" class=" px-4 w-full rounded-md outline-none bg-white border  h-11">
                                </div>
                                <div v-if="!show" class=" invisible w-full flex flex-col items-start space-y-2">
                                    <label for="wig" class=" text-gray-400 text-sm">Total in USD ($)</label>
                                    <input type="number" id="wig" placeholder="Price" class=" px-4 w-full rounded-md outline-none bg-white border  h-11">
                                </div>
                        </div>
                    </div> 


                   <div class=" w-full flex pt-4 pb-20" v-if="loading">
                        <div role="status" class=" m-auto">
                            <svg aria-hidden="true" class="w-8 h-8 mr-2 text-[#9B309D] animate-spin  fill-[#b437b6]" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class=" pt-10 pb-20 px-4 w-full grid grid-cols-2 gap-5" v-if="show && !loading">
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-xl font-bold text-[#9B309D]">Price in TT:</span>
                            <span class=" text-lg text-gray-500 font-medium">{{price_in_tt}}</span>
                        </div>
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-xl font-bold text-[#9B309D] ">Customs and Duties:</span>
                            <span class=" text-lg text-gray-500 font-medium">${{customs_and_duties}}</span>
                        </div>
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-xl font-bold text-[#9B309D] ">Service Fee:</span>
                            <span class=" text-lg text-gray-500 font-medium">${{service_fee}}</span>
                        </div>
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-xl font-bold text-[#9B309D] ">Total:</span>
                            <span class=" text-lg text-gray-500 font-medium">${{total}}</span>
                        </div>
                    </div>

                    <div class=" w-full py-10" v-if="!show"></div>

                    <div class=" w-full absolute -bottom-8 px-4 left-0">
                        <button @click="Calculate" class=" w-full h-20 text-center bg-[#9B309D] text-white hover:bg-[#811f83] duration-200 rounded-xl text-2xl font-medium">Send</button>
                    </div>
                </div>
</template>


<script setup>
import { ref } from "vue";
 const loading = ref(false);
 const show = ref(false)
 const price = ref(null);

 const price_in_tt = ref(null);
 const customs_and_duties = ref(null);
 const service_fee = ref(null);
 const total = ref(null);

 const Calculate = () => {
    loading.value = true;

    setTimeout(() =>{
        loading.value = false;
        // Total TT = Price in USD x 7
        // Service Fee = 150
        // Customs and Duties = 100
        // Total = sum of the above
        price_in_tt.value = price.value * 7;
        customs_and_duties.value = 100;
        service_fee.value = 150;
        total.value = price_in_tt.value + customs_and_duties.value + service_fee.value;
        show.value = true;
    },600)
 }
</script>