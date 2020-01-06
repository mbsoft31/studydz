var axios = window.axios = require('axios');

var pages = []

const getdata = function (page, subpage) {
	var parent = null
	var currentpage = null

	if (page != undefined) {
        var current = null
        for (var i = 0; i < pages.length; i++) {
            if(pages[i].name == page){
                current = pages[i]
            }
        }

        if (subpage != undefined) {

            parent = current

            var currentsubpage = null
            for (var i = 0; i < current.subpages.length; i++) {
                if(current.subpages[i].name == subpage){
                    currentsubpage = current.subpages[i]
                }
            }

            currentpage = currentsubpage
        }else {
            parent = null
            currentpage = current
        }
    }else {
        parent = null
        currentpage = null
    }

	return {
		parent,
		currentpage
	}
}
export default {
	pages,
	getdata
}