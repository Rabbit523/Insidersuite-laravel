var ms = $('#invite_mail').magicSuggest({
    placeholder: "Enter e-mail addresses",
    allowDuplicates: false,
    useTabKey: true
  });
console.log(ms.getValue());