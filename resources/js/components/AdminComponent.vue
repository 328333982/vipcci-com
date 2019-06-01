<template>
    <div>
        <Table :loading="loading" :columns="columns1" :data="data1"></Table>
        <Page :total="topicTotal" :current="pageNum" :page-size="10" show-elevator show-total
              placement="top" @on-change="handlePage" ></Page>

    </div>

</template>
<script>
    export default {
        data () {
            return {
                topicTotal: 100,
                pageNum: 1,
                loading: false,
                columns1: [
                    {
                        title: 'ID',
                        key: 'id'
                    },
                    {
                        title: '标题',
                        key: 'title'
                    },
                    {
                        title: '分类',
                        key: ''
                    },
                    {
                        title: '描述',
                        key: 'discribe'
                    },
                    {
                        title: '下载量',
                        key: 'download'
                    },
                    {
                        title: '最后更新时间',
                        key: 'updated_at'
                    },
                    {
                        title: '操作',
                        key: 'action',
                        width: 150,
                        align: 'center',
                        render: (h, params) => {
                            return h('div', [
                                h('Button', {
                                    props: {
                                        type: 'primary',
                                        size: 'small'
                                    },
                                    style: {
                                        marginRight: '5px'
                                    },
                                    on: {
                                        click: () => {
                                            this.edit(params.index)
                                        }
                                    }
                                }, '编辑'),

                                h('Button', {
                                    props: {
                                        type: 'error',
                                        size: 'small'
                                    },
                                    on: {
                                        click: () => {
                                            this.remove(params.index)
                                        }
                                    }
                                }, '删除')
                            ]);
                        }
                    }
                ],
                data1: []
            }
        },
        mounted(){
            axios.get('api/topics?page=1').then(response=>{
                this.data1 = response.data.data;
                this.topicTotal = response.data.meta.pagination.total;
                this.pageNum = response.data.meta.pagination.current_page;
                this.pageSize = response.data.meta.pagination.per_page;
            })
        },
        methods: {
            handlePage(index){
                // console.log('api/topics?page='+index)
                axios.get('api/topics?page='+index).then(response=>{
                    this.data1 = response.data.data;
                    this.topicTotal = response.data.meta.pagination.total;
                    this.pageNum = response.data.meta.pagination.current_page;
                    this.pageSize = response.data.meta.pagination.per_page;
                })
            },
            edit (index) {
                // console.log(this.data1[index]['id'])
                this.$router.push({ name: 'edit' , params: { userId:this.data1[index]['id'] }})
            },
            remove (index) {
                console.log(index);
                this.data1.splice(index, 1);
            }
        }
    }
</script>
