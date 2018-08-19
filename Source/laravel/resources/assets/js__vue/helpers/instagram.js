// https://github.com/NRandall/igjs

function getPosts(user) {
	return new Promise((resolve, reject) => {
		const xhr = new XMLHttpRequest();
		const url =
			"https://allorigins.me/get?url=" +
			encodeURIComponent("https://instagram.com/" + user + "/");

		xhr.open("GET", url);
		xhr.onload = () => resolve(formatPosts(xhr.responseText, user));
		xhr.onerror = () => reject(xhr.statusText);
		xhr.send();
	});
}

function formatPosts(rawPosts, username) {
	let result = [];
	rawPosts = JSON.parse(rawPosts);
	rawPosts = JSON.parse(
		rawPosts.contents
			.split("window._sharedData = ")[1]
			.split(";</script>")[0]
	).entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;
	rawPosts.forEach(function(item) {
		result.push({
			raw: item.node,
			image: item.node.display_url,
			dimensions: item.node.dimensions,
			likes: item.node.edge_liked_by.count,
			caption: (item.node.edge_media_to_caption.edges.length > 0 ? item.node.edge_media_to_caption.edges[0].node.text : ""),
			comments: item.node.edge_media_to_comment.count,
			video: item.node.is_video,
			code: item.node.shortcode,
			url: "https://instagram.com/p/" + item.node.shortcode,
			timestamp: item.node.taken_at_timestamp,
			thumbnails: {
				150: item.node.thumbnail_resources[0].src,
				240: item.node.thumbnail_resources[1].src,
				320: item.node.thumbnail_resources[2].src,
				480: item.node.thumbnail_resources[3].src,
				640: item.node.thumbnail_resources[4].src
			}
		});
	});
	return result;
}

export default { getPosts, formatPosts };
