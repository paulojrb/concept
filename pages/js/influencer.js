$.getJSON('pages/js/profiles.json', function (data) { 

    arrobj = data
    
    for (y = 0; y < data.length; y++) {
        profile = data[y]

        card = `
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="user-avatar float-xl-left pr-4 float-none">
                            <img src="assets/images/${profile["picture"]}" alt="User Avatar" class="rounded-circle user-avatar-xl">
                        </div>
                        <div class="pl-xl-3">
                            <div class="m-b-0">
                                <div class="user-avatar-name d-inline-block">
                                    <h2 class="font-24 m-b-10">${profile["name"]}</h2>
                                </div>
                                <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <p class="d-inline-block text-dark">${profile["views"]} Reviews </p>
                                </div>
                            </div>
                            <div class="user-avatar-address">
                                <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>${profile["city"]} <span class="m-l-10">${profile["sexo"]}<span class="m-l-20">${profile["years"]} Year Old</span></span>
                                </p>
                                <div class="mt-3">
                                    <a href="#" class="mr-1 badge badge-light">Fitness</a>
                                    <a href="#" class="mr-1 badge badge-light">Life Style</a>
                                    <a href="#" class="mr-1 badge badge-light">Gym</a>
                                    <a href="#" class="badge badge-light">Crossfit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="float-xl-right float-none mt-xl-0 mt-4">
                            <a href="/concept-master/dashboard-influencer.php?profile=${profile["name"]}" class="btn btn-secondary">Send Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top user-social-box">
                <div class="user-social-media d-xl-inline-block ">
                    <span class="mr-3 twitter-color">
                        <i class="fab fa-twitter-square"></i>
                    </span>
                    <span>
                        ${profile.twitter}
                    </span>
                </div>
                <div class="user-social-media d-xl-inline-block">
                    <span class="mr-3  pinterest-color">
                        <i class="fab fa-pinterest-square"></i>
                    </span>
                    <span>
                        ${profile.pinterest}
                    </span>
                </div>
                <div class="user-social-media d-xl-inline-block">
                    <span class="mr-3 instagram-color">
                        <i class="fab fa-instagram"></i>
                    </span>
                    <span>
                        ${profile.instagram}
                    </span>
                </div>
                <div class="user-social-media d-xl-inline-block">
                    <span class="mr-3  facebook-color">
                        <i class="fab fa-facebook-square "></i>
                    </span>
                    <span>
                        ${profile.facebook}
                    </span>
                </div>
            </div>
        </div>
        `
        document.getElementById('cards-profile').insertAdjacentHTML('afterend', card)

    }

});


/*
stars = '<i class="fa fa-fw fa-star"></i>'
for (i = 1; i < profile["rating"]; i++) {
    stars = stars+'<i class="fa fa-fw fa-star"></i>'
}
`
<div class="card">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="user-avatar float-xl-left pr-4 float-none">
                    <img src="assets/images/${profile["picture"]}" alt="User Avatar" class="rounded-circle user-avatar-xl">
                </div>
                <div class="pl-xl-3">
                    <div class="m-b-0">
                        <div class="user-avatar-name d-inline-block">
                            <h2 class="font-24 m-b-10">${profile["picture"]}</h2>
                        </div>
                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                            ${stars}
                            <p class="d-inline-block text-dark">${profile["views"]} Reviews </p>
                        </div>
                    </div>
                    <div class="user-avatar-address">
                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>${profile["city"]} <span class="m-l-10">${profile["sexo"]}<span class="m-l-20">${profile["years"]} Year Old</span></span>
                        </p>
                        <div class="mt-3">
                            <a href="#" class="mr-1 badge badge-light">Fitness</a>
                            <a href="#" class="mr-1 badge badge-light">Life Style</a>
                            <a href="#" class="mr-1 badge badge-light">Gym</a>
                            <a href="#" class="badge badge-light">Crossfit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="float-xl-right float-none mt-xl-0 mt-4">
                    <a href="#" class="btn btn-secondary">Send Messages</a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top user-social-box">
        <div class="user-social-media d-xl-inline-block ">
            <span class="mr-2 twitter-color">
                <i class="fab fa-twitter-square"></i>
            </span>
            <span>
                13,291
            </span>
        </div>
        <div class="user-social-media d-xl-inline-block">
            <span class="mr-2  pinterest-color">
                <i class="fab fa-pinterest-square"></i>
            </span>
            <span>
                84,019
            </span>
        </div>
        <div class="user-social-media d-xl-inline-block">
            <span class="mr-2 instagram-color">
                <i class="fab fa-instagram"></i>
            </span>
            <span>
                12,300
            </span>
        </div>
        <div class="user-social-media d-xl-inline-block">
            <span class="mr-2  facebook-color">
                <i class="fab fa-facebook-square "></i>
            </span>
            <span>
                92,920
            </span>
        </div>
    </div>
</div>
`

*/