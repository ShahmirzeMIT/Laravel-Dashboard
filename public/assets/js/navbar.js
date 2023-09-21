const profileMenu=document.querySelector('.profile-menu')
const openProfile=document.getElementById('openProfile')

openProfile.addEventListener('click',()=>{
	profileMenu.style.top="45px"
})
document.addEventListener('click', (event) => {
	const target = event.target;
	if (target !== openProfile && !profileMenu.contains(target)) {
		profileMenu.style.top = '-95px';
	   }
   });
