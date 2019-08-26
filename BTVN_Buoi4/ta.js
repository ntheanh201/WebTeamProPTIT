let list = [
  'Phan Đức Duẩn',
  'Nguyễn Thị Huyền',
  'Phùng Quốc Đức',
  'Nguyễn Đức Hạnh',
  'Nguyễn Viết Thành Đạt',
  'Nguyễn Hưng Quốc',
  'Đào Thành Lộc',
  'Trần Anh Tú',
  'Nguyễn Văn Học',
  'Nguyễn Trung Thành',
  'Bùi Phương Ngọc Mai',
  'Lê Bá Hoài',
  'Nguyễn Văn Hòa',
  'Hoàng Hiệp',
  'Hồ Quốc Cường',
  'Trần Duy Công Khanh',
  'Nguyễn Tiến Hải',
  'Trần Việt Huy',
  'Nguyễn Mạnh Cường',
  'Nguyễn Đình Tài ',
  'Đào Xuân Phong',
  'Nguyễn Việt Hương',
  'Nguyễn Hoài Đức',
  'Nguyễn Văn Tuệ',
  'Vũ Đình Công',
  'Nguyễn Minh Hiếu',
  'Lê Khắc Tuấn Anh',
  'Đỗ Mai Phương',
  'Nguyễn Tùng Lâm',
  'Nguyễn Văn Sơn',
  'Nguyễn Thế Anh',
  'Nguyễn Phương Thảo',
  'Nguyễn Thùy Linh',
  'Nguyễn Tuấn Kiệt',
  'Trần Minh Quang',
  'Nguyễn Văn Hiếu',
  'Trần Văn Thắng',
  'Đỗ Thị Thanh Thanh'
];

const shuffle = array => {
  var currentIndex = array.length,
    temporaryValue,
    randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
};

const day = ['29/08', '30/08', '31/08'];
i = 0;
ans = [];
while (shuffle(list).length) {
  x = shuffle(list).splice(0, 13);
  ans.push([`12h ngày ${day[i++]}: `, x]);
}

console.log(ans);
