<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">



            </div>
        </div>
    </div>
</section>


<script>
    projectlist();
    async function projectlist() {
        let URL = "/projectsData";

        try {

            const response = await axios.get(URL);
            response.data.forEach((element) => {
                document.getElementById('project-list').innerHTML += (`
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${element['title']}</h2>
                                <p>${element['details']}</p>
                            </div>
                            <img class="img-fluid" src="${element['thumbnailLink']}" alt="..." />
                        </div>
                    </div>
                </div>
                `)
            })

        } catch (error) {
            alert(error);
        }

    }
</script>
