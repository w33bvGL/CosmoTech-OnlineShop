<template>
  <section class="line">
    <div class="line-inner">
      <div class="line-tit">
        <div class="markQUEE">
          <p>
            <span>🚀 Սարքավորումների լայն տեսականի </span>Սմարթֆոններից և
            դյուրակիր համակարգիչներից մինչև տնային էլեկտրոնային գաջեթներ, մենք
            ունենք ամեն ինչ ձեր կյանքն ավելի հարմարավետ և ոճային դարձնելու
            համար: Մենք առաջարկում ենք լավագույն ապրանքանիշերը մատչելի գներով:
          </p>
          <p>
            <span>🔒 Ապահով գնումներ և երաշխավորված որակ </span>Ձեր գնումների
            անվտանգությունը մեր առաջնահերթությունն է: Մենք երաշխավորում ենք
            բարձրորակ ապրանքներ և տրամադրում ենք վճարման հուսալի եղանակներ: Ձեր
            վստահությունը մեր հանդեպ մեր հպարտությունն է:
          </p>
          <p>
            <span>🌟 Հատուկ առաջարկ Ձեզ համար </span>Օգտագործեք SINS2005 եզակի
            գովազդային կոդը և ստացեք բացառիկ զեղչ մեր առցանց սարքավորումների
            խանութում:
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  // ваша логика компонента
};
</script>

<style scoped lang="scss">
.line {
  width: 100%;
  padding: 15px 0;
  background-color: #263c97;
  color: white;

  .line-inner {
    width: 100%;
    padding: 0 5px;
    .line-tit {
      max-width: 1800px;
      margin: 0 auto;
      display: flex;
      overflow: hidden;
      flex-direction: row;

      .markQUEE {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        animation: marquee 30s linear infinite;
        transform: translateX(300px);
        gap: 20px;

        p {
          white-space: nowrap;
        }
      }

      span {
        font-weight: bold;
        letter-spacing: 1px;
      }
    }
  }

  @keyframes marquee {
    to {
      transform: translateX(-100%);
    }
  }
}
</style>
