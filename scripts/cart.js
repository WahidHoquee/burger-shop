burgerContainer.addEventListener('click', (e) => {
  // console.log(e.target.tagName)
  // console.log('object')
  if(e.target.tagName === 'BUTTON'){
    const button = e.target;
    const dataset = button.dataset;

    // We find the data according to the element
    const productCollection = products[dataset.type];

    let productData;
    for (let j = 0; j < productCollection.length; j++) {
      const product = productCollection[j];
      if(product.id == dataset.id){
        productData = product
      }
    }

    const orderCart = localStorage.getItem('order-cart')
    // Checking if there is data already in the localstorage
    // If there is no data then we will create a new data store named favourites
    if(!orderCart){
      localStorage.setItem('order-cart', JSON.stringify([productData]))
    }
    else{
      const orderCart = JSON.parse(localStorage.getItem('order-cart'));
      orderCart.push(productData);
      localStorage.setItem('order-cart', JSON.stringify(orderCart))
    }
  }
})
