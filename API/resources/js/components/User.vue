<script setup>
    import axios from 'axios';
    import {ref, onMounted} from 'vue';

    const user = ref([]);

    const getUsers = () => {
        axios.get('/api/users')
        .then((response) => {
            users.value = response.data;
            })
        
        }

        onMounted(() => {
            getUsers();
        });

</script>


<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste de Rôles</h3>

                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item mr-1">
                                <a href="{{route('roles.create')}}" class="btn btn-primary float-end btn-sm"><i class="fa fa-plus-circle mr-2"></i>Ajouter</a>
                            </li>
                            <div class="nav-item">
                                <div class="input-group mt-0 input-group-sm" style="width:350px">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Rechercher par email">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"> <i class="fas fa-search"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                                <th>Rôle</th>
                                <th>Date de Création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr v-for="(user, index) in users" :key="index">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ user.nom }}</td>
                                    <td>{{ user.prenom }}</td>
                                    <td>{{ user.email }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
