function filtersInit(){
    let filters = document.querySelector('.teams__filters');
    if(filters){
        teamsFilters();
        loadMoreButton();
    }
}

function teamsFilters(){
    let filterItems = document.querySelectorAll('.teams__dropdown-item');
    if(filterItems){
        filterItems.forEach((item) => {
            item.addEventListener('click', (event) => {
                let mainFilterName = item.parentElement.parentElement.querySelector('.team__filters-name');
                mainFilterName.innerHTML = item.innerHTML;
            });
        });
    }
}
function loadMoreButton(){
    let loadMoreButton = document.querySelector('.teams__load-more');
    if(loadMoreButton) {
        let currentPage = 1;
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', (event) => {
                currentPage++;
                ajaxLoadMorePosts(currentPage);
            });
        }
    }
}
function ajaxLoadMorePosts(currentPage){

    const ajaxData = {
        action: 'loadMoreTeams',
        page: currentPage,
    };
    $.post(settings.ajax_url, ajaxData)
        .done((response) => {
            response = JSON.parse(response);
            if(response.teams) {
                let teamsContainer = document.querySelector('.teams__container');
                teamsContainer.innerHTML += response.teams;
            }
            hideLoadMoreButton();
        });

}

function hideLoadMoreButton(){
    let teamsElements = document.querySelectorAll('.teams__team');
    let maxElements = document.querySelector('[data-max-posts]');
    if(teamsElements.length >= maxElements.dataset.maxPosts) {
        let loadMoreButton = document.querySelector('.teams__load-more');
        if (loadMoreButton) {
            loadMoreButton.style.display = 'none';
        }
    }
}
export default {filtersInit};