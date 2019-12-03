import groupBy from 'lodash/groupBy';

export const isSubTable = ({ subTable }) => Array.isArray(subTable);

export const groupRowsByKey = (rows, groupKey) => {
  const groupedRows = [];
  const grouped = groupBy(rows, groupKey);

  Object.keys(grouped).forEach((key) => {
    const [first, ...rest] = grouped[key];
    groupedRows.push(
      first,
    );
    if (rest && rest.length) {
      groupedRows.push(
        { ...first, id: Date.now() + Math.random(), subTable: grouped[key] },
      );
    }
  });

  return groupedRows;
};