export default ms => {
  console.log('...sleep');
  const start = new Date().getTime();
  for ( let i = 0; i < 1e7; i++ ) {
    if ( (new Date().getTime() - start) > ms ){
      console.log('...out')
      break;
    }
  }
}