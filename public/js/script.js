$(document).ready(function() {
  const getEntries = () => {
    const defer = $.Deferred();
    $.ajax({
      url: '/blog',
      method: 'GET',
      success: defer.resolve,
      error: defer.reject
    });
    return defer.promise();
  };
  const getEntry = () => {};
  const postEntry = (title, body) => {
    const defer = $.Deferred();
    const data = {
      data: {title:title, body:body}
    };
    $.ajax({
      url: '/blog',
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: data,
      success: defer.resolve,
      error: defer.reject
    })
    return defer.promise();
  };
  const drawEntries = () => {
    const out = $('#entries');
    getEntries().then((resp) => {
      const entries = JSON.parse(resp).reverse();
      console.log(entries);
      out.empty();
      for (let obj of entries) {
        const card = $('<div class="card">');
        const content = $('<div class="card-content">');
        const anc = $('<a href="/view/' + obj.id + '">');
        const title = $('<span class="card-title">');
        const dt = new Date(obj.date);
        const date = dt.getFullYear() + '/' + (dt.getMonth() + 1) + '/' + dt.getDate();
        const time = dt.getHours() + ':' + dt.getMinutes() + ':' + dt.getSeconds();
        title.append(obj.title).append(' | ').append($('<span>').append(date + ' ' + time));
        anc.append(title);
        content.append(anc).append($('<p>').append(obj.body));
        card.append(content);
        out.append(card);
      }
    }, (err) => {
      console.log(err);
    });
  };
  const wBtn = $('#writeBtn');
  const modal = $('#modal1');
  const cancelBtn = $('#cancelBtn');
  const submitBtn = $('#submitBtn');
  wBtn.on('click', () => {
    modal.openModal();
  });
  cancelBtn.on('click', () => {
    modal.closeModal();
  });
  submitBtn.on('click', () => {
    const inTitle = $('#inTitle');
    const inBody = $('#inBody');
    postEntry(inTitle.val(), inBody.val()).then(() => {
      alert('success!');
      drawEntries();
      modal.closeModal();
    }, () => {
      alert('fail!');
      modal.closeModal();
    });
  });
  drawEntries();
  console.log('ready');
});