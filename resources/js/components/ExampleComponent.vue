<template>
    <div>
    <Header></Header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <ul class="bg-dark p-4">
                    <div class="m-2"><a href="#" class="text-white text-decoration-none">Dashboard</a></div>
                    <div class="m-2"><a href="#" class="text-white text-decoration-none">Product</a></div>
                    <div class="m-2 bg-info"><a href="#" class="text-white text-decoration-none">Order</a></div>
                    <div class="m-2"><a href="#" class="text-white text-decoration-none">Chat</a></div>
                    <div class="m-2"><a href="#" class="text-white text-decoration-none">Special Pages</a></div>
                    <div class="m-2"><a href="#" class="text-white text-decoration-none">Documentations</a></div>
                </ul>
            </div>


            <div class="col-8">
                <label for="from">from:</label>

                <input type="date" v-model="from" id="from" name="from">

                <label for="to">to:</label>

                <input type="date" v-model="to" id="to" name="to">

                <label for="to">day:</label>
                <select class="" v-model="day" aria-label="Default select example">
                    <option value="0" selected>Monday</option>
                    <option value="1">Tuesday</option>
                    <option value="2">wednesday</option>
                    <option value="3">Thursday</option>
                    <option value="4">Friday</option>
                    <option value="5">Saturday</option>
                    <option value="6">Sunday</option>
                </select>
                <button type="button" @click="getData()" class="btn btn-warning">Generate</button>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Time has been ordered</th>
                            <th scope="col">Merchant Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(product,i) in myData" v-if="product.product.length">
                                <td>{{product.product[0].name}}</td>
                                <td>{{product.product[0].price}}</td>
                                <td>{{product.created_at}}</td>
                                <td>{{product.product[0].merchant.merchant_name}}</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         </div>
    </div>
    <Footer></Footer>
    </div>
</template>

<script>

    //importing bootstrap 5 Modules
    import "bootstrap/dist/css/bootstrap.min.css";
    import "bootstrap/dist/js/bootstrap.min.js";
    import Header from './Header'
    import Footer from './Footer'
    export default {

        components: {
            Header,
            Footer
        },
        data(){
            return{
                data:[],
                from:'',
                to:'',
                day:0,
            }
        },
        methods: {
            getData(){
                axios.get("http://localhost:8000/api/least-ordered-products-per-day/"+this.from+"/"+this.to+"/"+this.day)
                    .then(response =>{
                        this.data = response.data.data

                    })
                    .catch(error => {
                        this.errorMessage = error.message;
                        console.error("There was an error!", error);
                    });

            }
        },
        computed:{
            myData(){
                return this.data;
            }
        }
    }
</script>
