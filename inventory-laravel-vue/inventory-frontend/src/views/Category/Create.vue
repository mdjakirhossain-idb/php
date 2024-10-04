<script setup>
// All import 
import { useRouter } from 'vue-router';
import { useCategoryStore } from '@/stores/category';
import {ref, reactive, inject } from 'vue';
//All instance

const router = useRouter();
const categoryStore = useCategoryStore();
const swal = inject('$swal');
//All variable
categoryStore.router = router;
categoryStore.swal = swal;
const formData = reactive({
    name: null,
    file: null,
    code:null
});


const schema = reactive({
    name: 'required'
});
//All methods
const onFileChange = (e) => {
   
    formData.file = e.target.files[0];
};
const StoreCategory = () => {
    categoryStore.storeCategory(formData);
};
//hooks and computed
</script>

<template>
    <div class="page-content">
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Category Create</h4>
                                <RouterLink class="btn btn-success" :to="{ name: 'category.index' }">
                                    <i class='bx bx-arrow-back'></i>
                                    Category Index
                                </RouterLink>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <vee-form :validation-schema="schema" enctype="multipart/form-data" @submit="StoreCategory">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <vee-field type="text" v-model="formData.name" name="name" class="form-control"
                                            id="name" placeholder="Enter category name" />
                                        <ErrorMessage name="name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="code">Code</label>
                                        <vee-field type="text" v-model="formData.code" name="code" class="form-control"
                                            id="code" placeholder="Enter category code" />
                                        <ErrorMessage name="code" />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="file">File</label>
                                        <vee-field name="file" @change="onFileChange" type="file" class="form-control"
                                            id="file" />
                                            <img width="100px" class="mt-2" :src="showFile" alt="">
                                        <ErrorMessage name="file" />
                                    </div>
                                </div>
                                <div class="form-group mt-2">

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </vee-form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>