<template>
    <!--
    <app-layout title="Colaborador" :darkMode="$page.props.user.dark_mode">
        <template #header>
        </template>
        <div class="container">
            <div class="row">
                 Perfil 
                <div class="col-sm-4">
                    <div class="card-body bg-white shadow-sm">
                        <div class="row mb-3">
                            <div class="col-sm-12 justify-content-center d-flex">
                                <img width="80px"
                                    src="https://www.freeiconspng.com/thumbs/profile-icon-png/am-a-19-year-old-multimedia-artist-student-from-manila--21.png"
                                    class="rounded-5" alt="...">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h3>{{ this.colaborador.nome }}</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 text-center text-secondary">
                                <h5>{{ this.colaborador.cargo }} - {{ this.colaborador.setor }}</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12 mb-3 justify-content-center d-flex">
                                <div v-if="this.colaborador.status == 'Ativo'" class="btn btn-success rounded">Ativo
                                </div>
                                <div v-if="this.colaborador.status == 'Férias'" class="btn btn-warning rounded">Férias
                                </div>
                                <div v-if="this.colaborador.status == 'Atestado'" class="btn btn-warning rounded">
                                    Atestado</div>
                                <div v-if="this.colaborador.status == 'Desligado'" class="btn btn-danger rounded">
                                    Desligado
                                </div>
                            </div>
                        </div>
                         Informações de contato 
                        <div class="row mb-3 justify-content-center d-flex">
                            <div class="col-sm-10">
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <h6 class="fw-bold">Informações de contato</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 justify-content-center d-flex">
                                        <i class="bi bi-telephone mt-2"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="" id="" disabled placeholder=""
                                            v-model="this.colaboradores.telefone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 justify-content-center d-flex">
                                        <i class="bi bi-envelope mt-2"></i>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="" id="" disabled placeholder=""
                                            v-model="this.colaboradores.email">
                                    </div>
                                </div>
                            </div>
                        </div>
                         Informações privadas 
                        <div class="row mb-3">
                            <div class="col-sm-12 mb-3 justify-content-center d-flex">
                                <button data-bs-toggle="collapse" href="#collapseInformacoesPrivadas" role="button"
                                    aria-expanded="false" aria-controls="collapseInformacoesPrivadas"
                                    class="btn rounded">Informações privadas</button>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="collapse" id="collapseInformacoesPrivadas">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="form-label fw-bold">Remuneração</label>
                                                <input class="form-control" type="text" name="" id="" disabled
                                                    placeholder="" v-model="this.colaborador.salario">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-body bg-white shadow-sm">
                         Projetos / Tarefas
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div class="row mb-3">
                                    <div class="col-sm-2 ms-4">
                                        <h3 class="fw-bold">Tarefas</h3>
                                    </div>
                                    <div class="col-sm-2" data-bs-toggle="modal" data-bs-target="#novaTarefaModal">
                                        <h1><i class="bi bi-plus-circle"></i></h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="row justify-content-center d-flex">
                                            <div class="col-sm-8 justify-content-center 
                                        d-flex bg-danger rounded">
                                                <h6 class="fw-bold m-2">A fazer</h6>
                                            </div>
                                        </div>
                                        <div v-for="tarefa in this.tarefas" class="row justify-content-center d-flex">
                                            <div v-if="tarefa.status == 'A fazer'" class="col-sm-12 text-center">
                                                <p>{{ tarefa.titulo }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row justify-content-center d-flex align-items-center">
                                            <div class="col-sm-8 justify-content-center d-flex bg-warning rounded">
                                                <h6 class="fw-bold m-2">Fazendo</h6>
                                            </div>
                                        </div>
                                        <div v-for="tarefa in this.tarefas" class="row justify-content-center d-flex">
                                            <div v-if="tarefa.status == 'Fazendo'" class="col-sm-12 text-center">
                                                <p>{{ tarefa.titulo }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="row justify-content-center d-flex">
                                            <div
                                                class="col-sm-8 bg-success rounded justify-content-center d-flex rounded">
                                                <h6 class="fw-bold m-2">Feitas</h6>
                                            </div>
                                        </div>
                                        <div v-for="tarefa in this.tarefas" class="row justify-content-center d-flex">
                                            <div v-if="tarefa.status == 'Feito'" class="col-sm-12 text-center">
                                                <p>{{ tarefa.titulo }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             Modal para cadastrar nova tarefa 
                            <div class="col-sm-12">
                                <div class="modal fade" id="novaTarefaModal" tabindex="-1"
                                    aria-labelledby="novaTarefaModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="novaTarefaModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <label class="form-label fw-bold">Título</label>
                                                        <input class="form-control" type="text" name="" id=""
                                                            v-model="this.formTarefa.titulo">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <label class="form-label fw-bold">Descrição</label>
                                                        <input class="form-control" type="text" name="" id=""
                                                            v-model="this.formTarefa.descricao">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label fw-bold">Responsável</label>
                                                        <input class="form-control" type="text" name="" id=""
                                                            v-model="this.formTarefa.responsavel">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-12">
                                                        <label class="form-label fw-bold">Status</label>
                                                        <VueMultiselect v-model="this.formTarefa.status"
                                                            :placeholder="'Escolha uma opção'"
                                                            :selectedLabel="'Selecionado'" :deselectLabel="'Remover'"
                                                            :selectLabel="'Selecionar'" :options="status">
                                                        </VueMultiselect>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button @click="cadastrarTarefa" type="button" class="btn btn-primary"
                                                    ata-bs-dismiss="modal">Cadastrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
    -->
</template>

<script>
import { defineComponent } from "vue"
//import AppLayout from "@/Layouts/AppLayout.vue"
//import { Link } from '@inertiajs/inertia-vue3'
import axios from "axios";

export default defineComponent({
    components: {
        //AppLayout,
        //Link,
        axios,
    },
    mounted() {
        //this.cadastrarTarefa();
    },
    methods: {
        cadastrarTarefa() {
            axios.post(route('tarefa.store', {
                titulo: this.formTarefa.titulo,
                descricao: this.formTarefa.descricao,
                status: this.formTarefa.status,
                responsavel: this.formTarefa.responsavel,
                colaborador_id: this.colaborador.id,
            }))
                .then((response => {
                    console.log(response.data)
                }))
        },
        visualizarTarefa() {

        }
    },
    props: ['colaborador', 'tarefas'],
    data() {
        return {
            colaboradores: {
                telefone: '(xx) xxxx-xxxx',
                email: 'xxxxxx@xxxxx.com',
            },
            formTarefa: {
                titulo: '',
                descricao: '',
                responsavel: '',
                status: '',
            },
            status: [
                'A fazer',
                'Fazendo',
                'Feito'
            ],
        }
    },
});
</script>

